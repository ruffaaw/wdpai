<?php

use exceptions\UnknownUsersException;

require_once 'Repository.php';
require_once __DIR__ . '/../models/Project.php';
require_once __DIR__ . '/../exceptions/UnknownUsersException.php';

class ProjectRepository extends Repository
{
    public function getProject(int $id): ?Project
    {
        $stmt = $this->database->connect()->prepare('
            SELECT * FROM public.projects WHERE id = :id
        ');
        $stmt->bindParam(':email', $id, PDO::PARAM_INT);
        $stmt->execute();

        $project = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($project === false) {
            return null;
        }

        return new Project(
            $project['title'],
            $project['description'],
            $project['image']
        );
    }

    public function addProject(Project $project)
    {
        $date = new DateTime();
        $stmt = $this->database->connect()->prepare('
            INSERT INTO public.projects (title, description, created_at, id_assigned_by, image)
            VALUES (?, ?, ?, ?, ?)
        ');

        $assignedById=1;

        $stmt->execute([
            $project->getTitle(),
            $project->getDescription(),
            $date->format('Y-m-d'),
            $assignedById,
            $project->getImage()
        ]);
    }

    public function getProjects(): array
    {
        $result = [];

        $stmt = $this->database->connect()->prepare('
            SELECT * FROM projects;
        ');
        $stmt->execute();
        $projects = $stmt->fetchAll(PDO::FETCH_ASSOC);

        foreach ($projects as $project) {
            $result[] = new Project(
                $project['title'],
                $project['description'],
                $project['image']
            );
        }

        return $result;
    }
}