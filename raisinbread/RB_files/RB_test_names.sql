SET FOREIGN_KEY_CHECKS=0;
TRUNCATE TABLE `test_names`;
LOCK TABLES `test_names` WRITE;
INSERT INTO `test_names` (`ID`, `Test_name`, `Full_name`, `Sub_group`, `IsDirectEntry`) VALUES (1,'radiology_review','Radiology review',1,NULL);
INSERT INTO `test_names` (`ID`, `Test_name`, `Full_name`, `Sub_group`, `IsDirectEntry`) VALUES (2,'bmi','BMI Calculator',1,1);
INSERT INTO `test_names` (`ID`, `Test_name`, `Full_name`, `Sub_group`, `IsDirectEntry`) VALUES (3,'medical_history','Medical History',1,1);
INSERT INTO `test_names` (`ID`, `Test_name`, `Full_name`, `Sub_group`, `IsDirectEntry`) VALUES (4,'mri_parameter_form','MRI Parameter Form',2,NULL);
INSERT INTO `test_names` (`ID`, `Test_name`, `Full_name`, `Sub_group`, `IsDirectEntry`) VALUES (6,'aosi','AOSI',1,NULL);
UNLOCK TABLES;
SET FOREIGN_KEY_CHECKS=1;
