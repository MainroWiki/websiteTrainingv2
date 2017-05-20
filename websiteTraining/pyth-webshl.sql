CREATE DATABASE mishu;
CREATE USER 'mishu'@'localhost' identified by 'mishu';
GRANT ALL ON mishu.* to 'mishu'@'localhost';
GRANT FILE ON *.* TO 'mishu'@'localhost';
FLUSH PRIVILEGES;
USE mishu;
CREATE TABLE SECURITY_COURSES(id INT NOT NULL , title VARCHAR(25) NOT NULL , price VARCHAR(25) NOT NULL );
INSERT INTO SECURITY_COURSES(id, title, price)
	VALUES
		(1, 'SELF-HACKING'		, '300$' ), 
		(2, 'HACKING-THE-PLANT'		, '200$' ),
		(3, 'C-SCRIPTING' 	  	, '300$' ),
 		(4, 'BASH-COMPILATION' 	   	, '200$' ),
		(5, 'MISHU-RTFM-BEST-PRACTICES' ,'1000$');
