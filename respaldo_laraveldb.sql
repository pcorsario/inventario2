-- MySQL dump 10.19  Distrib 10.3.38-MariaDB, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: laraveldb
-- ------------------------------------------------------
-- Server version	10.3.38-MariaDB-0ubuntu0.20.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `categorias`
--

DROP TABLE IF EXISTS `categorias`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `categorias` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nombre_categoria` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categorias`
--

LOCK TABLES `categorias` WRITE;
/*!40000 ALTER TABLE `categorias` DISABLE KEYS */;
INSERT INTO `categorias` VALUES (2,'MUEBLES Y ENSERES','2023-03-06 18:00:36','2023-07-30 22:51:53'),(3,'EQUIPO DE COMPUTACIÓN','2023-03-06 18:00:44','2023-03-06 18:00:44'),(4,'EQUIPO DE COMUNICACIÓN','2023-03-06 18:00:51','2023-03-06 18:00:51'),(5,'REDES DE PROCESAMIENTO DE DATOS','2023-03-06 18:01:00','2023-03-06 18:01:00'),(6,'EQUIPO ELÉCTRICO','2023-03-06 18:01:08','2023-03-06 18:01:08'),(7,'CONSTRUCCIONES Y EDIFICACIONES','2023-03-06 18:01:16','2023-03-06 18:01:16'),(8,'VEHÍCULOS','2023-03-06 18:01:23','2023-03-06 18:01:23'),(9,'EDIFICIOS','2023-03-06 18:01:30','2023-03-06 18:01:30'),(10,'OTROS ARTÍCULOS','2023-03-06 18:04:27','2023-03-06 18:04:27'),(11,'SUMINISTRO DE OFICINA','2023-03-06 18:04:46','2023-03-06 18:04:46'),(12,'TELECOMUNICACIONES','2023-03-06 18:05:02','2023-03-06 18:05:02'),(13,'EQUIPO DE AUDIO','2023-03-06 18:05:37','2023-03-06 18:05:37'),(14,'UTENSILIOS DE COCINA','2023-03-06 18:06:59','2023-03-06 18:06:59'),(15,'VESTIMENTA INSTITUCIONAL','2023-03-06 18:07:13','2023-03-06 18:07:13'),(16,'PUBLICIDAD S.A','2023-03-06 18:07:47','2023-03-06 19:15:24'),(17,'EQUIPO MÉDICO','2023-03-06 18:07:51','2023-03-06 18:07:51'),(18,'ARTÍCULOS DECORATIVOS','2023-03-06 18:09:41','2023-03-06 18:09:41');
/*!40000 ALTER TABLE `categorias` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `condicions`
--

DROP TABLE IF EXISTS `condicions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `condicions` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `condicion` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `condicions`
--

LOCK TABLES `condicions` WRITE;
/*!40000 ALTER TABLE `condicions` DISABLE KEYS */;
INSERT INTO `condicions` VALUES (2,'REPARADO','2023-03-06 18:11:00','2023-03-06 18:11:00'),(3,'MALO','2023-03-06 18:11:05','2023-03-06 18:11:05'),(4,'REGULAR','2023-03-06 18:11:09','2023-03-06 18:11:09'),(5,'BUENO','2023-03-06 18:11:12','2023-03-06 18:11:12'),(6,'NUEVO','2023-03-06 18:11:16','2023-03-06 18:11:16'),(7,'DADO DE BAJA',NULL,NULL);
/*!40000 ALTER TABLE `condicions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `departamentos`
--

DROP TABLE IF EXISTS `departamentos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `departamentos` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nombre_departamento` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `departamentos`
--

LOCK TABLES `departamentos` WRITE;
/*!40000 ALTER TABLE `departamentos` DISABLE KEYS */;
INSERT INTO `departamentos` VALUES (1,'SECRETARÍA','2023-03-06 17:49:30','2023-03-06 17:49:30'),(2,'RECTORADO','2023-03-06 17:49:41','2023-03-06 17:49:41'),(3,'VINCULACIÓN','2023-03-06 17:49:46','2023-03-06 17:49:46'),(4,'VICERRECTORADO','2023-03-06 17:49:52','2023-03-06 17:49:52'),(5,'BIBLIOTECA','2023-03-06 17:49:56','2023-03-06 17:49:56'),(6,'INVESTIGACIÓN','2023-03-06 17:50:01','2023-03-06 17:50:01'),(7,'BODEGA SECRETARÍA','2023-03-06 17:50:08','2023-03-06 17:50:08'),(8,'BODEGUITA PUBLICIDAD','2023-03-06 17:50:13','2023-03-06 17:50:13'),(9,'ENFERMERÍA','2023-03-06 17:50:18','2023-03-06 17:50:18'),(10,'COLECTURÍA','2023-03-06 17:50:23','2023-03-06 17:50:23'),(11,'CENTRO DE CÓMPUTO 1','2023-03-06 17:50:28','2023-03-06 17:50:28'),(12,'CENTRO DE CÓMPUTO 2','2023-03-06 17:50:34','2023-03-06 17:50:34'),(13,'BODEGA AUDIO TIC','2023-03-06 17:50:42','2023-03-06 17:50:42'),(14,'TIC','2023-03-06 17:50:46','2023-03-06 17:50:46'),(15,'SALA DOCENTES','2023-03-06 17:50:53','2023-03-06 17:50:53'),(16,'ADMIN-FINAN','2023-03-06 17:50:57','2023-03-06 17:50:57'),(17,'CONTABILIDAD','2023-03-06 17:51:10','2023-03-06 17:51:10'),(18,'CENTRO DE CÓMPUTO 3','2023-03-06 17:51:38','2023-03-06 17:51:38'),(19,'DIRECCIÓN DESARROLLO Y ACREDITA','2023-03-06 17:51:42','2023-03-06 17:51:42'),(20,'CASA MUSEO','2023-03-06 17:51:47','2023-03-06 17:51:47'),(21,'AULA A1','2023-03-06 17:51:51','2023-03-06 17:51:51'),(22,'ESTÉTICA','2023-03-06 17:52:12','2023-03-06 17:52:12'),(23,'MAQUILLAJE','2023-03-06 17:52:16','2023-03-06 17:52:16'),(24,'TALLER GENERAL','2023-03-06 17:52:22','2023-03-06 17:52:22'),(25,'BODEGA PEQUEÑA JARDINERÍA','2023-03-06 17:52:28','2023-03-06 17:52:28'),(26,'COCINA','2023-03-06 17:52:37','2023-03-06 17:52:37'),(27,'REPOSTERÍA','2023-03-06 17:52:44','2023-03-06 17:52:44'),(28,'BODEGA','2023-03-13 21:08:22','2023-03-13 21:08:22');
/*!40000 ALTER TABLE `departamentos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `failed_jobs`
--

LOCK TABLES `failed_jobs` WRITE;
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `inventarios`
--

DROP TABLE IF EXISTS `inventarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `inventarios` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `fecha_inventario` date NOT NULL,
  `hora_inventario` time NOT NULL,
  `producto_id` bigint(20) unsigned DEFAULT NULL,
  `condicion_id` bigint(20) unsigned DEFAULT NULL,
  `sede_id` bigint(20) unsigned DEFAULT NULL,
  `planta_id` bigint(20) unsigned DEFAULT NULL,
  `departamento_id` bigint(20) unsigned DEFAULT NULL,
  `user_id` bigint(20) unsigned DEFAULT NULL,
  `cantidad` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `inventarios_producto_id_foreign` (`producto_id`),
  KEY `inventarios_condicion_id_foreign` (`condicion_id`),
  KEY `inventarios_sede_id_foreign` (`sede_id`),
  KEY `inventarios_planta_id_foreign` (`planta_id`),
  KEY `inventarios_departamento_id_foreign` (`departamento_id`),
  KEY `inventarios_user_id_foreign` (`user_id`),
  CONSTRAINT `inventarios_condicion_id_foreign` FOREIGN KEY (`condicion_id`) REFERENCES `condicions` (`id`) ON DELETE SET NULL,
  CONSTRAINT `inventarios_departamento_id_foreign` FOREIGN KEY (`departamento_id`) REFERENCES `departamentos` (`id`) ON DELETE SET NULL,
  CONSTRAINT `inventarios_planta_id_foreign` FOREIGN KEY (`planta_id`) REFERENCES `plantas` (`id`) ON DELETE SET NULL,
  CONSTRAINT `inventarios_producto_id_foreign` FOREIGN KEY (`producto_id`) REFERENCES `productos` (`id`) ON DELETE SET NULL,
  CONSTRAINT `inventarios_sede_id_foreign` FOREIGN KEY (`sede_id`) REFERENCES `sedes` (`id`) ON DELETE SET NULL,
  CONSTRAINT `inventarios_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE SET NULL
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `inventarios`
--

LOCK TABLES `inventarios` WRITE;
/*!40000 ALTER TABLE `inventarios` DISABLE KEYS */;
INSERT INTO `inventarios` VALUES (1,'2023-03-06','18:34:00',1,6,2,4,11,1,1,'2023-03-06 18:36:05','2023-03-06 18:36:05'),(2,'2023-03-06','18:36:00',2,5,3,4,11,2,1,'2023-03-06 18:37:16','2023-03-06 18:37:16'),(3,'2023-03-06','18:38:00',3,2,2,3,17,1,1,'2023-03-06 18:38:29','2023-03-06 18:38:29'),(4,'2023-03-06','18:38:00',4,4,2,3,14,1,1,'2023-03-06 18:39:00','2023-03-06 18:39:00'),(5,'2023-03-06','18:39:00',5,5,3,3,14,1,1,'2023-03-06 18:39:24','2023-03-06 18:39:24'),(6,'2023-03-06','18:39:00',6,6,3,4,14,1,1,'2023-03-06 18:39:54','2023-03-07 23:14:57'),(7,'2023-03-07','11:25:00',7,5,2,3,14,1,1,'2023-03-07 11:26:14','2023-03-07 11:26:14'),(8,'2023-03-07','11:26:00',8,5,3,1,18,1,1,'2023-03-07 11:26:59','2023-03-07 11:26:59'),(9,'2023-03-07','11:29:00',9,7,3,1,16,1,1,'2023-03-07 11:30:46','2023-03-13 20:59:12'),(10,'2023-03-03','22:58:00',8,7,3,2,16,3,1,'2023-03-09 22:59:20','2023-03-13 20:58:40'),(11,'2023-03-13','21:06:00',10,6,2,4,28,1,1,'2023-03-13 21:07:47','2023-03-13 21:09:12'),(12,'2023-08-01','00:04:00',11,6,3,4,1,1,1,'2023-08-01 00:04:48','2023-08-01 00:06:07'),(13,'2023-08-02','00:08:00',11,6,2,3,5,2,1,'2023-08-01 00:09:08','2023-08-01 00:09:08'),(14,'2023-08-01','00:12:00',12,6,2,4,15,2,1,'2023-08-01 00:12:51','2023-08-01 00:12:51');
/*!40000 ALTER TABLE `inventarios` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1),(3,'2019_08_19_000000_create_failed_jobs_table',1),(4,'2019_12_14_000001_create_personal_access_tokens_table',1),(5,'2022_02_15_024107_create_categorias_table',1),(6,'2022_02_15_025620_create_condicions_table',1),(7,'2022_02_15_025924_create_departamentos_table',1),(8,'2022_02_15_030502_create_productos_table',1),(9,'2022_02_15_122810_create_permission_tables',1),(10,'2022_02_18_192349_create_plantas_table',1),(11,'2022_02_18_192633_create_sedes_table',1),(12,'2022_02_18_195911_create_inventarios_table',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `model_has_permissions`
--

DROP TABLE IF EXISTS `model_has_permissions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) unsigned NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`),
  CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `model_has_permissions`
--

LOCK TABLES `model_has_permissions` WRITE;
/*!40000 ALTER TABLE `model_has_permissions` DISABLE KEYS */;
/*!40000 ALTER TABLE `model_has_permissions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `model_has_roles`
--

DROP TABLE IF EXISTS `model_has_roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) unsigned NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`),
  CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `model_has_roles`
--

LOCK TABLES `model_has_roles` WRITE;
/*!40000 ALTER TABLE `model_has_roles` DISABLE KEYS */;
INSERT INTO `model_has_roles` VALUES (1,'App\\Models\\User',1),(1,'App\\Models\\User',3),(2,'App\\Models\\User',2);
/*!40000 ALTER TABLE `model_has_roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `permissions`
--

DROP TABLE IF EXISTS `permissions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `permissions` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `permissions`
--

LOCK TABLES `permissions` WRITE;
/*!40000 ALTER TABLE `permissions` DISABLE KEYS */;
INSERT INTO `permissions` VALUES (1,'home','web','2023-03-06 08:12:35','2023-03-06 08:12:35'),(2,'departamentos','web','2023-03-06 08:12:35','2023-03-06 08:12:35'),(3,'ver-rol','web','2023-03-06 08:12:43','2023-03-06 08:12:43'),(4,'crear-rol','web','2023-03-06 08:12:43','2023-03-06 08:12:43'),(5,'editar-rol','web','2023-03-06 08:12:43','2023-03-06 08:12:43'),(6,'borrar-rol','web','2023-03-06 08:12:43','2023-03-06 08:12:43'),(7,'ver-producto','web','2023-03-06 08:12:43','2023-03-06 08:12:43'),(8,'crear-producto','web','2023-03-06 08:12:43','2023-03-06 08:12:43'),(9,'editar-producto','web','2023-03-06 08:12:43','2023-03-06 08:12:43'),(10,'borrar-producto','web','2023-03-06 08:12:43','2023-03-06 08:12:43'),(11,'ver-precio','web','2023-03-06 08:12:43','2023-03-06 08:12:43');
/*!40000 ALTER TABLE `permissions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `personal_access_tokens`
--

LOCK TABLES `personal_access_tokens` WRITE;
/*!40000 ALTER TABLE `personal_access_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `personal_access_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `plantas`
--

DROP TABLE IF EXISTS `plantas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `plantas` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nom_planta` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `plantas_nom_planta_unique` (`nom_planta`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `plantas`
--

LOCK TABLES `plantas` WRITE;
/*!40000 ALTER TABLE `plantas` DISABLE KEYS */;
INSERT INTO `plantas` VALUES (1,'PLANTA 4','2023-03-06 18:13:14','2023-03-06 18:13:14'),(2,'PLANTA 3','2023-03-06 18:13:18','2023-03-06 18:13:18'),(3,'PLANTA 2','2023-03-06 18:13:26','2023-03-06 18:13:26'),(4,'PLANTA 1','2023-03-06 18:13:30','2023-03-06 18:13:30');
/*!40000 ALTER TABLE `plantas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `productos`
--

DROP TABLE IF EXISTS `productos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `productos` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `codigo_producto` varchar(255) NOT NULL,
  `nombre_producto` varchar(255) NOT NULL,
  `fecha_compra` date NOT NULL,
  `precio` decimal(9,2) NOT NULL,
  `caracteristicas` varchar(255) NOT NULL,
  `categoria_id` bigint(20) unsigned DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `productos_categoria_id_foreign` (`categoria_id`),
  CONSTRAINT `productos_categoria_id_foreign` FOREIGN KEY (`categoria_id`) REFERENCES `categorias` (`id`) ON DELETE SET NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `productos`
--

LOCK TABLES `productos` WRITE;
/*!40000 ALTER TABLE `productos` DISABLE KEYS */;
INSERT INTO `productos` VALUES (1,'CPU CONT-ISTJ-021','CPU CONT-ISTJ-021','2023-03-06',10.00,'Marca WINSTAR color negro',3,'2023-03-06 18:15:37','2023-03-06 18:15:37'),(2,'IMPRESORA CONT-ISTJ-028','IMPRESORA CONT-ISTJ-028','2023-03-06',140.00,'Marca EPSON color negra modelo L575',3,'2023-03-06 18:16:06','2023-03-06 18:16:06'),(3,'MONITOR CONT-ISTJ-012','MONITOR CONT-ISTJ-012','2023-03-06',120.00,'Marca ARI-AOC color negro, modelo E2070SWHN, de 19,5 pulgadas, series COMARI51040011200397',3,'2023-03-06 18:16:45','2023-03-06 18:16:45'),(4,'MOUSE CONT-ISTJ-018','MOUSE CONT-ISTJ-018','2023-03-06',10.00,'Marca GENIUS color negro',3,'2023-03-06 18:17:11','2023-03-06 18:17:11'),(5,'PARLANTES CONT-ISTJ-040 ','PARLANTES CONT-ISTJ-040 ','2023-03-06',10.00,'Par marca WINSTAR color negros',3,'2023-03-06 18:17:52','2023-03-06 18:17:52'),(6,'REGLETA DE ENCHUFES CONT-ISTJ-036','REGLETA DE ENCHUFES CONT-ISTJ-036','2023-03-06',5.00,'Color blanco con 6 puertos marca VOLTECH',3,'2023-03-06 18:18:38','2023-03-06 18:18:38'),(7,'TECLADO CONT-ISTJ-017','TECLADO CONT-ISTJ-017','2023-03-06',8.00,'Marca ARI AOC color negro',3,'2023-03-06 18:19:39','2023-03-06 18:19:39'),(8,'CÁMARA CONT-ISTJ-054','CÁMARA CONT-ISTJ-054','2023-03-06',100.00,'WEB CAMERA modelo, CMSXJ22A de dos megapixeles, color negra',4,'2023-03-06 18:20:22','2023-03-06 18:20:22'),(9,'ESCRITORIO CONT-ISTJ-000005','ESCRITORIO CONT-ISTJ-000005','2023-03-06',200.00,'Mediano rectangular de madera y metal color café y negro, con 3 cajones y 2 patas de tubo redondo verticales',2,'2023-03-06 18:21:53','2023-03-06 19:11:38'),(10,'CPU CORE I7 CONT-ISTJ-001000','CPU CORE I7 CONT-ISTJ-001000','2023-03-13',1000.00,'CPU CORE I7 3,00GZ RAM-8GB',NULL,'2023-03-13 21:05:57','2023-03-13 21:05:57'),(11,'MASETERO CONT-ISTJ-030','MASETERO CONT-ISTJ-030','2023-08-01',200.00,'Grande, metálico color beige ',2,'2023-08-01 00:03:20','2023-08-01 00:03:20'),(12,'CONT-ISTJ-004','MUEBLE ESTANTERÍA','2023-08-01',60.00,'Diseño de madera compartido para carpetas de archivos y suministros',2,'2023-08-01 00:11:54','2023-08-01 00:11:54');
/*!40000 ALTER TABLE `productos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `role_has_permissions`
--

DROP TABLE IF EXISTS `role_has_permissions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) unsigned NOT NULL,
  `role_id` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`permission_id`,`role_id`),
  KEY `role_has_permissions_role_id_foreign` (`role_id`),
  CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `role_has_permissions`
--

LOCK TABLES `role_has_permissions` WRITE;
/*!40000 ALTER TABLE `role_has_permissions` DISABLE KEYS */;
INSERT INTO `role_has_permissions` VALUES (1,1),(2,1),(8,1);
/*!40000 ALTER TABLE `role_has_permissions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `roles` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `roles`
--

LOCK TABLES `roles` WRITE;
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
INSERT INTO `roles` VALUES (1,'Administrador','web','2023-03-06 08:12:35','2023-03-06 08:12:35'),(2,'Directivo','web','2023-03-06 08:12:35','2023-03-06 08:12:35');
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sedes`
--

DROP TABLE IF EXISTS `sedes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sedes` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nom_sede` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sedes`
--

LOCK TABLES `sedes` WRITE;
/*!40000 ALTER TABLE `sedes` DISABLE KEYS */;
INSERT INTO `sedes` VALUES (2,'QUITO','2023-03-06 18:12:39','2023-03-06 18:12:39'),(3,'SANTO DOMINGO DE LOS TSÁCHILAS','2023-03-06 18:12:56','2023-03-06 18:12:56');
/*!40000 ALTER TABLE `sedes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `cedula` varchar(10) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`),
  UNIQUE KEY `users_cedula_unique` (`cedula`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Rolando Castro','racastrog@itsjapon.edu.ec','1719420968',NULL,'$2y$10$WB.hYFqp4tPOfG8yFfKVsuyafnDcJP8WFc/GwvmS3xUr2IpjYNrF.','dvtCMiGFIXIKEBcpxJj9IuPYDTqUbGfHbn8VRPAuI1KwQ424abCIaP0t1oXC','2023-03-06 08:12:35','2023-03-06 08:12:35'),(2,'Daniel Cabrera','dcabrera@itsjapon.edu.ec','1718172615',NULL,'$2y$10$nxkQe8//H3Do7J69x5/w7umaQchMktHXhtG1DD8bw634TUopJMSGO',NULL,'2023-03-06 08:12:35','2023-03-06 08:12:35'),(3,'ROLANDO CASTRO 2','castrorolando2007@hotmail.com','1719420960',NULL,'$2y$10$xzeBd60PdB4HXeYKxHfdUOG5kPbbN3e36K.w0K3EDll14C774qeo6',NULL,'2023-03-09 22:53:08','2023-03-09 22:53:08');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-09-01 21:37:47
