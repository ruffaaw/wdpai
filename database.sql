/*
 Navicat Premium Data Transfer

 Source Server         : dbname
 Source Server Type    : PostgreSQL
 Source Server Version : 150002 (150002)
 Source Host           : localhost:5432
 Source Catalog        : dbname
 Source Schema         : public

 Target Server Type    : PostgreSQL
 Target Server Version : 150002 (150002)
 File Encoding         : 65001

 Date: 17/02/2023 14:56:42
*/


-- ----------------------------
-- Sequence structure for products_id_seq
-- ----------------------------
DROP SEQUENCE IF EXISTS "public"."products_id_seq";
CREATE SEQUENCE "public"."products_id_seq" 
INCREMENT 1
MINVALUE  1
MAXVALUE 2147483647
START 1
CACHE 1;

-- ----------------------------
-- Sequence structure for users_id_seq
-- ----------------------------
DROP SEQUENCE IF EXISTS "public"."users_id_seq";
CREATE SEQUENCE "public"."users_id_seq" 
INCREMENT 1
MINVALUE  1
MAXVALUE 2147483647
START 1
CACHE 1;

-- ----------------------------
-- Table structure for cart
-- ----------------------------
DROP TABLE IF EXISTS "public"."cart";
CREATE TABLE "public"."cart" (
  "id_user" int4 NOT NULL,
  "id_product" int4 NOT NULL
)
;

-- ----------------------------
-- Records of cart
-- ----------------------------
INSERT INTO "public"."cart" VALUES (1, 3);
INSERT INTO "public"."cart" VALUES (1, 6);
INSERT INTO "public"."cart" VALUES (1, 12);
INSERT INTO "public"."cart" VALUES (2, 4);
INSERT INTO "public"."cart" VALUES (2, 6);
INSERT INTO "public"."cart" VALUES (2, 9);

-- ----------------------------
-- Table structure for products
-- ----------------------------
DROP TABLE IF EXISTS "public"."products";
CREATE TABLE "public"."products" (
  "id" int4 NOT NULL DEFAULT nextval('products_id_seq'::regclass),
  "type" int4 NOT NULL,
  "name" varchar COLLATE "pg_catalog"."default" NOT NULL,
  "price" int4 NOT NULL,
  "image" varchar COLLATE "pg_catalog"."default" NOT NULL
)
;

-- ----------------------------
-- Records of products
-- ----------------------------
INSERT INTO "public"."products" VALUES (1, 1, 'Komputer gamingowy Lenovo Legion T5 26IOB6 i5-11400F - 16GB RAM - 512GB Dysk - RTX3060Ti - Win11', 5000, 'acer-komputer-acer-i511-16gb-1tb-rtx3060-w10,90347132201_7.png');
INSERT INTO "public"."products" VALUES (2, 1, 'Komputer gamingowy ASUS ROG Strix G15CE-1170KF0800 i7-11700KF - 16GB RAM - 512GB Dysk - RTX3060', 4700, 'asus-rog-strix-g10dk-r5600x112w-amd-ryzen-5-5600x-16gb-512gb-rtx3060-w11,102824887049_8.png');
INSERT INTO "public"."products" VALUES (3, 1, 'Komputer gamingowy Lenovo Legion T5 26IOB6 i5-11400F - 16GB RAM - 512GB Dysk - RTX3060Ti - Win11', 4800, 'lenovo-komputer-lenovo-i511-16g-512g-rtx36ti-10,107482704897_3.png');
INSERT INTO "public"."products" VALUES (4, 4, 'Telewizor LG 55QNED813QA - 55" - 4K - Smart TV', 3500, 'lg-55qned813qa-tv-qned-uhd-4k,105686353729_8.png');
INSERT INTO "public"."products" VALUES (6, 2, 'Apple MacBook Air M1 - 16GB- 256 - Mac OS Space Gray', 6000, 'pr_2020_11_10_21_37_1_812_01.png');
INSERT INTO "public"."products" VALUES (7, 2, 'Gigabyte Outlet G5 KC i5-10500H - 16GB - 512 RTX3060P 240Hz', 5000, 'pr_2021_2_23_14_38_46_901_01.png');
INSERT INTO "public"."products" VALUES (8, 2, 'Lenovo IdeaPad 3-15 i5-1135G7 - 12GB - 512 - Win11X', 3000, 'pr_2021_12_4_18_4_57_218_00.png');
INSERT INTO "public"."products" VALUES (9, 2, 'Acer Nitro 5 i5-12500H - 16GB - 512 RTX3060 144Hz', 5200, 'pr_2022_8_16_15_3_47_174_00.png');
INSERT INTO "public"."products" VALUES (10, 2, 'HP Victus 15 i7-12650H - 16GB - 960 RTX3050Ti 144Hz', 5900, 'pr_2022_11_16_16_54_3_838_00.jpg');
INSERT INTO "public"."products" VALUES (11, 2, 'Apple MacBook Pro M2 Max/64GB/2TB/Mac OS Silver 30R GPU', 25000, 'pr_2023_1_17_19_15_24_719_05.png');
INSERT INTO "public"."products" VALUES (12, 4, 'Telewizor SAMSUNG QE55Q77B 55" QLED 4K 120HZ Tizen TV', 4000, 'samsung-qe55q77b-qled-tv-uhd-4k,101544504857_8.png');
INSERT INTO "public"."products" VALUES (13, 3, 'Smartfon SAMSUNG Galaxy S20 FE 8 - 256GB 5G 6.5" 120Hz Niebieski SM-G781', 2400, 'samsung-smartfon-galaxy-s20-fe-5g-blue-samsung,69935410801_7.png');
INSERT INTO "public"."products" VALUES (14, 3, 'Smartfon APPLE iPhone 13 128GB 5G 6.1" Czarny', 4250, 'smartfon-apple-iphone-13-128gb-polnoc,92176218953_8.png');
INSERT INTO "public"."products" VALUES (15, 4, 'Telewizor Sony XR-65X90K - 65" - 4K - Google TV', 6000, 'sony-xr65x90kaep-4k-google-tv,104531632633_8.png');
INSERT INTO "public"."products" VALUES (16, 3, 'Smartfon XIAOMI Redmi Note 11s 6 - 128GB 6.43" 90Hz', 1200, 'xiaomi-smartfon-redmi-note-11s-6-64-gray-xiao,101372429865_7.png');
INSERT INTO "public"."products" VALUES (5, 1, 'Komputer gamingowy Optimus GB450T-CR13 R5 3600 - 16GB RAM - 1TB Dysk - RX6600 - Win11', 3700, 'optimus-komputer-optimus-r536-16g-1t-rx66-e-8g-w,102366424521_8.jpg');
INSERT INTO "public"."products" VALUES (17, 1, 'Komputer MAD DOG MD5600X-A03 R5-5600X 16GB RAM 500GB SSD 1TB HDD Radeon RX6600XT Windows 10 Home', 6300, 'Komputer-MAD-DOG-MD5600X-A03-01-1.png');
INSERT INTO "public"."products" VALUES (18, 1, 'Komputer LCO Pro 4220 i5-11400F 16GB RAM 1TB SSD GeForce RTX3050 Windows 11 Home', 5000, 'Komputer-LCO-Pro-4220-1.jpg');
INSERT INTO "public"."products" VALUES (19, 3, 'Smartfon SAMSUNG Galaxy S23 8/128GB 5G 6.1" 120Hz Czarny SM-S911', 4600, 'Smartfon-SAMSUNG-Galaxy-S23-5G-Czarny-front-model.jpg');
INSERT INTO "public"."products" VALUES (20, 3, 'Smartfon INFINIX Note 12 2023 8/128GB 6.7" Szary X676C', 1200, 'Smartfon-INFINIX-Note-12-2023-szary-tyl-front.png');
INSERT INTO "public"."products" VALUES (21, 3, 'Smartfon SAMSUNG Galaxy S20 FE 6/128GB 5G 6.5" 120Hz Niebieski SM-G781', 2200, 'Smartfon-SAMSUNG-Galaxy-S20-FE-5G-SM-G781-Niebieski-tyl-front.png');
INSERT INTO "public"."products" VALUES (22, 4, 'Telewizor PHILIPS 55OLED707 55" OLED 4K 120Hz Android TV Ambilight 3 Dolby Atmos Dolby Vision HDMI 2.1', 6000, 'Telewizor-PHILIPS-55OLED707-front-1-wersja1.jpg');
INSERT INTO "public"."products" VALUES (23, 4, 'Telewizor PHILIPS 65PUS8857 65" LED 4K 120Hz Android TV Ambilight x3 Dolby Atmos Dolby Vision HDMI 2.1', 5000, 'Telewizor-PHILIPS-65PUS8857-front1.jpg');
INSERT INTO "public"."products" VALUES (24, 4, 'Telewizor TCL 50P735 50" LED 4K Google TV Dolby Atmos Dolby Vision HDMI 2.1', 1900, 'Telewizor-TCL-LED-50P735-front.jpg');

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS "public"."users";
CREATE TABLE "public"."users" (
  "id" int4 NOT NULL DEFAULT nextval('users_id_seq'::regclass),
  "email" varchar(255) COLLATE "pg_catalog"."default" NOT NULL,
  "password" varchar(255) COLLATE "pg_catalog"."default" NOT NULL,
  "name" varchar(100) COLLATE "pg_catalog"."default" NOT NULL,
  "surname" varchar(255) COLLATE "pg_catalog"."default" NOT NULL,
  "phone" int4 NOT NULL,
  "role" int4 NOT NULL DEFAULT 2,
  "date_add" timestamp(6)
)
;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO "public"."users" VALUES (2, 'jsnow@pk.edu.pl', '$2y$12$zAGRkKNyCp1WQnXGSbVsXe7XaL75OQqUIbH6dk1DHATprH44HKp2G', 'John', 'Snow', 123123123, 2, '2023-02-17 13:53:05.194319');
INSERT INTO "public"."users" VALUES (3, 'grabikwiktoria60@gmail.com', '$2y$12$V2bQfBdwuhTLalEyLI1ZJOXLs3QLWCuqZQ8AGpKwc7YTzFVMNHwyK', 'Wiktoria', 'Grabik', 12312343, 2, '2023-02-17 13:53:05.194319');
INSERT INTO "public"."users" VALUES (4, 'maciek1234@gmail.com', '$2y$12$lGGn.DX3P0Jgugt6wFrUBuQrzAMp/5IkQqIqkA8sppGtTh3xnLw3m', 'Maciej', 'Nowak', 1234562354, 2, '2023-02-17 13:53:05.194319');
INSERT INTO "public"."users" VALUES (5, 'dabba9@gmail.com', '$2y$12$kWX0tbe9i.QZ8xJlvHU32u4gi.s9OM2jsL6GgIk4/5ggR3gxG2MKm', 'Damian', 'Bartłomiejski', 123455345, 2, '2023-02-17 13:53:05.194319');
INSERT INTO "public"."users" VALUES (6, 'drmundo1235@gmail.com', '$2y$12$MSkfUgCr5A8wYGJ.UXrTQ.5RTSU9OvT.R5Lpx8QlmbQoQNYWQ1Btq', 'Dr', 'Mundo', 876567566, 2, '2023-02-17 13:53:05.194319');
INSERT INTO "public"."users" VALUES (1, 'ruffaaw@gmail.com', '$2y$12$VQVBJ5fa4h28kqJqQtknOeM6oKBgrBkmY8o6WKmPrgupTAJQdRg5.', 'Rafal', 'Adamski', 123123123, 1, '2023-02-17 13:53:05.194319');

-- ----------------------------
-- Function structure for add_date_user
-- ----------------------------
DROP FUNCTION IF EXISTS "public"."add_date_user"();
CREATE OR REPLACE FUNCTION "public"."add_date_user"()
  RETURNS "pg_catalog"."trigger" AS $BODY$
BEGIN
    NEW.date_add := NOW();
    RETURN NEW;
END;
$BODY$
  LANGUAGE plpgsql VOLATILE
  COST 100;

-- ----------------------------
-- Function structure for uuid_generate_v1
-- ----------------------------
DROP FUNCTION IF EXISTS "public"."uuid_generate_v1"();
CREATE OR REPLACE FUNCTION "public"."uuid_generate_v1"()
  RETURNS "pg_catalog"."uuid" AS '$libdir/uuid-ossp', 'uuid_generate_v1'
  LANGUAGE c VOLATILE STRICT
  COST 1;

-- ----------------------------
-- Function structure for uuid_generate_v1mc
-- ----------------------------
DROP FUNCTION IF EXISTS "public"."uuid_generate_v1mc"();
CREATE OR REPLACE FUNCTION "public"."uuid_generate_v1mc"()
  RETURNS "pg_catalog"."uuid" AS '$libdir/uuid-ossp', 'uuid_generate_v1mc'
  LANGUAGE c VOLATILE STRICT
  COST 1;

-- ----------------------------
-- Function structure for uuid_generate_v3
-- ----------------------------
DROP FUNCTION IF EXISTS "public"."uuid_generate_v3"("namespace" uuid, "name" text);
CREATE OR REPLACE FUNCTION "public"."uuid_generate_v3"("namespace" uuid, "name" text)
  RETURNS "pg_catalog"."uuid" AS '$libdir/uuid-ossp', 'uuid_generate_v3'
  LANGUAGE c IMMUTABLE STRICT
  COST 1;

-- ----------------------------
-- Function structure for uuid_generate_v4
-- ----------------------------
DROP FUNCTION IF EXISTS "public"."uuid_generate_v4"();
CREATE OR REPLACE FUNCTION "public"."uuid_generate_v4"()
  RETURNS "pg_catalog"."uuid" AS '$libdir/uuid-ossp', 'uuid_generate_v4'
  LANGUAGE c VOLATILE STRICT
  COST 1;

-- ----------------------------
-- Function structure for uuid_generate_v5
-- ----------------------------
DROP FUNCTION IF EXISTS "public"."uuid_generate_v5"("namespace" uuid, "name" text);
CREATE OR REPLACE FUNCTION "public"."uuid_generate_v5"("namespace" uuid, "name" text)
  RETURNS "pg_catalog"."uuid" AS '$libdir/uuid-ossp', 'uuid_generate_v5'
  LANGUAGE c IMMUTABLE STRICT
  COST 1;

-- ----------------------------
-- Function structure for uuid_nil
-- ----------------------------
DROP FUNCTION IF EXISTS "public"."uuid_nil"();
CREATE OR REPLACE FUNCTION "public"."uuid_nil"()
  RETURNS "pg_catalog"."uuid" AS '$libdir/uuid-ossp', 'uuid_nil'
  LANGUAGE c IMMUTABLE STRICT
  COST 1;

-- ----------------------------
-- Function structure for uuid_ns_dns
-- ----------------------------
DROP FUNCTION IF EXISTS "public"."uuid_ns_dns"();
CREATE OR REPLACE FUNCTION "public"."uuid_ns_dns"()
  RETURNS "pg_catalog"."uuid" AS '$libdir/uuid-ossp', 'uuid_ns_dns'
  LANGUAGE c IMMUTABLE STRICT
  COST 1;

-- ----------------------------
-- Function structure for uuid_ns_oid
-- ----------------------------
DROP FUNCTION IF EXISTS "public"."uuid_ns_oid"();
CREATE OR REPLACE FUNCTION "public"."uuid_ns_oid"()
  RETURNS "pg_catalog"."uuid" AS '$libdir/uuid-ossp', 'uuid_ns_oid'
  LANGUAGE c IMMUTABLE STRICT
  COST 1;

-- ----------------------------
-- Function structure for uuid_ns_url
-- ----------------------------
DROP FUNCTION IF EXISTS "public"."uuid_ns_url"();
CREATE OR REPLACE FUNCTION "public"."uuid_ns_url"()
  RETURNS "pg_catalog"."uuid" AS '$libdir/uuid-ossp', 'uuid_ns_url'
  LANGUAGE c IMMUTABLE STRICT
  COST 1;

-- ----------------------------
-- Function structure for uuid_ns_x500
-- ----------------------------
DROP FUNCTION IF EXISTS "public"."uuid_ns_x500"();
CREATE OR REPLACE FUNCTION "public"."uuid_ns_x500"()
  RETURNS "pg_catalog"."uuid" AS '$libdir/uuid-ossp', 'uuid_ns_x500'
  LANGUAGE c IMMUTABLE STRICT
  COST 1;

-- ----------------------------
-- Alter sequences owned by
-- ----------------------------
ALTER SEQUENCE "public"."products_id_seq"
OWNED BY "public"."products"."id";
SELECT setval('"public"."products_id_seq"', 24, true);

-- ----------------------------
-- Alter sequences owned by
-- ----------------------------
ALTER SEQUENCE "public"."users_id_seq"
OWNED BY "public"."users"."id";
SELECT setval('"public"."users_id_seq"', 21, true);

-- ----------------------------
-- Primary Key structure for table products
-- ----------------------------
ALTER TABLE "public"."products" ADD CONSTRAINT "products_pk" PRIMARY KEY ("id");

-- ----------------------------
-- Triggers structure for table users
-- ----------------------------
CREATE TRIGGER "trigger_add_date_user" BEFORE INSERT ON "public"."users"
FOR EACH ROW
EXECUTE PROCEDURE "public"."add_date_user"();

-- ----------------------------
-- Primary Key structure for table users
-- ----------------------------
ALTER TABLE "public"."users" ADD CONSTRAINT "users_pk" PRIMARY KEY ("id");

-- ----------------------------
-- Foreign Keys structure for table cart
-- ----------------------------
ALTER TABLE "public"."cart" ADD CONSTRAINT "users_product_products_id_fk" FOREIGN KEY ("id_product") REFERENCES "public"."products" ("id") ON DELETE NO ACTION ON UPDATE NO ACTION;
ALTER TABLE "public"."cart" ADD CONSTRAINT "users_product_users_id_fk" FOREIGN KEY ("id_user") REFERENCES "public"."users" ("id") ON DELETE NO ACTION ON UPDATE NO ACTION;
