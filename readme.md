#INTROCEPT'S TASK version 1.0 17/10/2016


#INTRODUCTION

This is a small module of a program that save and display the basic information of users,like
  1.name
  2.address
  3.phone
  4.email
  5.education
  6.nationality
  7.Date of Birth
  8.mode of contact 
  9.gender.
This module consists of form validation where email is unique. The data can be saved in database as well as in the csv file. The information of the users can be seen and can also be downloaded as a csv file.


#REQUIREMENT MEET

The module has been developed in laravel 5.3 and following requirements have been satisfied
  1.laravel 5.x
  2.php 5.6 or above
  3.psr4 autoloading
  4.phpunit
  5.psr2 coding standard
  6.bootstrap
 

#DATABASE SET UP

CREATE TABLE `csvmodels` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` bigint(20) NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nationality` varchar(255) COLLATE utf8_unicode_ci DEFAULT NOT NULL,
  `dob` date DEFAULT NOT NULL,
  `education` varchar(255) COLLATE utf8_unicode_ci DEFAULT NOT NULL,
  `contact` varchar(255) COLLATE utf8_unicode_ci DEFAULT NOT NULL,
  `gender` varchar(255) COLLATE utf8_unicode_ci DEFAULT NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=149 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


#ENHANCEMENT

Following features can be added to the module
  1.search in the grid view
  2.sorting
  3.update
  4.delete


# MAINTAINERS - INTROCEPT'S TASK can be reached at

In order to report any bug , suggest any feature or any help , the maintainer can be reached at

 current maintainer
 Mohammad Aftab
 voice : 9845142984
 email:aftab1234011@gmail.com


#COPYRIGHT

All rights reserved. Introcept's task program and its use are subject to a license agreement and are also subject to copyright , trademark ,patent and other laws.





