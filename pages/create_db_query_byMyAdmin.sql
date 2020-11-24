CREATE TABLE `api_db`.`AccountLoginData` ( 
    `ID` INT NOT NULL AUTO_INCREMENT , 
    `Login` VARCHAR(20) NOT NULL , 
    `Password` VARCHAR(20) NOT NULL , 
    PRIMARY KEY (`ID`), 
    UNIQUE (`Login`)
) ENGINE = InnoDB;

CREATE TABLE `api_db`.`AccountInfo` ( 
    `ID` INT NOT NULL AUTO_INCREMENT , 
    `FullName` VARCHAR(30) NOT NULL , 
    `Nickname` VARCHAR(20) NULL DEFAULT NULL , 
    `LoginDataID` INT NOT NULL , 
    `RegistrationDate` DATE NOT NULL , 
    PRIMARY KEY (`ID`), 
    UNIQUE (`LoginDataID`), 
    UNIQUE (`Nickname`)
) ENGINE = InnoDB;

CREATE TABLE `api_db`.`Category` ( 
    `ID` INT NOT NULL AUTO_INCREMENT , 
    `Name` VARCHAR(20) NOT NULL , 
    `Description` TEXT NULL , 
    PRIMARY KEY (`ID`), 
    UNIQUE (`Name`)
) ENGINE = InnoDB;

CREATE TABLE `api_db`.`Post` ( 
    `ID` INT NOT NULL AUTO_INCREMENT , 
    `AuthorID` INT NOT NULL , 
    `CategoryID` INT NOT NULL , 
    `CreationDate` DATETIME NOT NULL , 
    `UpdateDate` DATETIME NOT NULL , 
    `Picture` VARCHAR(100) NULL , 
    `Content` TEXT NOT NULL , 
    PRIMARY KEY (`ID`)
) ENGINE = InnoDB;
ALTER TABLE `Post` ADD INDEX(`AuthorID`);
ALTER TABLE `Post` ADD INDEX(`CategoryID`);
ALTER TABLE `Post` ADD `Title` VARCHAR(100) NOT NULL AFTER `Picture`;

CREATE TABLE `api_db`.`Comment` ( 
    `ID` INT NOT NULL AUTO_INCREMENT , 
    `AuthorID` INT NOT NULL , 
    `PostID` INT NOT NULL , 
    `CreationDate` DATETIME NOT NULL , 
    `Content` TEXT NOT NULL , 
    PRIMARY KEY (`ID`)
) ENGINE = InnoDB;
ALTER TABLE `Comment` ADD INDEX(`AuthorID`);
ALTER TABLE `Comment` ADD INDEX(`PostID`);

ALTER TABLE `AccountInfo` ADD FOREIGN KEY (`LoginDataID`) REFERENCES `api_db`.`AccountLoginData`(`ID`) ON DELETE RESTRICT ON UPDATE CASCADE;
ALTER TABLE `Post` ADD FOREIGN KEY (`AuthorID`) REFERENCES `api_db`.`AccountInfo`(`ID`) ON DELETE RESTRICT ON UPDATE CASCADE;
ALTER TABLE `Post` ADD FOREIGN KEY (`CategoryID`) REFERENCES `api_db`.`Category`(`ID`) ON DELETE RESTRICT ON UPDATE CASCADE;
ALTER TABLE `Comment` ADD FOREIGN KEY (`AuthorID`) REFERENCES `api_db`.`AccountInfo`(`ID`) ON DELETE RESTRICT ON UPDATE CASCADE;
ALTER TABLE `Comment` ADD FOREIGN KEY (`PostID`) REFERENCES `api_db`.`Post`(`ID`) ON DELETE RESTRICT ON UPDATE CASCADE;