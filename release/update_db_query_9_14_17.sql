ALTER TABLE  `user` ADD  `STATUS` ENUM(  'ACTIVE',  'INACTIVE' ) NOT NULL DEFAULT  'INACTIVE';
CREATE TABLE  `USER_OTP` (
`auto_id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY ,
`user_id` INT NOT NULL ,
`OTP` VARCHAR( 10 ) NOT NULL ,
`STATUS` ENUM(  '0',  '1' ) NOT NULL DEFAULT  '0',
`CREATE_DATE` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP
) ;