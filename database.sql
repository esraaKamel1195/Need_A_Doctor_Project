-- drop database need_doctor;
create database need_doctor;
use need_doctor; 


CREATE TABLE admin (
  id int(11) NOT NULL auto_increment,
  username varchar(20) NOT NULL,
  password text NOT NULL,
  email text ,
  PRIMARY KEY  (id)
)  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ; 

insert into admin values(1,'sadaya gamal',md5('sadaya gamal'),'saadiagamalali@gmail.com');
CREATE TABLE doctor (
   id int(11) NOT NULL auto_increment,
   first_name varchar(20) NOT NULL,
   last_name varchar(20) NOT NULL,
   email text NOT NULL,
   phone int(11) NOT NULL,
   age int(11) NOT NULL,
   photo  text Not NULL,
   gender enum('female','male'),
   Specialty varchar(40) NOT NULL references specialize(name),
   qualify text NOT NULL,
   street varchar(40) NOT NULL references street(name),
   clinic_number int(11) NOT NULL,
   price int(11) NOT NULL,
   password text NOT NULL,
   appoint  varchar(50) NOT NULL,
   Experience int(11) not null,
  PRIMARY KEY  (id)
)  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

insert into doctor values (1,'Jonathan','Freed','JonathanFreed@gmail.com',012346789,45,'doctor5.jpg','male','Psychological and nervous',
"Dr. Jonathan Freed graduated with honors from New York University's College of Dentistry in 2003. While there he was a member 
of the Orthodontics Honors Program and the recipient of the Leon Pantel Memorial Award.
After graduation Dr. Freed served as Chief Dental Resident for Beth Israel Medical Center from 2003-2004. He was also named 
""Resident of the Year"
"Dr. Freed has been in private practice since 2004. He stays current with the latest in the dental field by regularly attending
challenging continuing education courses. Dr. Freed has trained at the Rosenthal Institute for Aesthetic Dentistry and The Pankey
 Institute for Advanced Dental Education.
Dr. Freed lives in nearby Woodcliff Lake, New Jersey with his wife Pamela and their two children.",'الجمهوريه',0147859663,90,
md5('JonathanFreed'),'from sunday to thursday',20),
                         
                         (2,'Curtis','McClelland','CurtisMcClelland@gmail.com',01252885789,35,'doctor6.jpg','male','Chiropractor',
'A graduate of New York Chiropractic College, Dr. Curtis McClelland is an accomplished chiropractor working for the people of 
 New York, NY. He earned his bachelor’s in kinesiology from the University of Western Ontario. 

Dr. McClelland provides his services at DASHA® as an "independent client provider." He shows keen interest in treating patients 
diagnosed with fibromyalgia, scoliosis, herniated disk, neck deformation/torticollis, and spondylolysis. 

Focused and caring, Dr. McClelland believes in providing effective and compassionate patient care. He is passionate about his 
field of expertise and encourages his patients to discuss their concerns candidly.'
,'النميس',0178969663,70,md5('CurtisMcClelland'),'from sunday to thursday',10);

insert into doctor values (3,'M.','Weiner','M.Weiner@gmail.com',0103464789,40,'member1.jpg','male','Dermotalogy',
"Alan Belsky is a caring and diligent chiropractor serving the community of New York, NY. Dr.
 Belsky attended the 
National University of Health Sciences, where he received his degree in chiropractic medicine."
,'المساحه',0100059663,70,
md5('M.Weiner'),'from sunday to thursday',25),
                         
                         (4,'Danielle','M.D','DanielleM.D@gmail.com',01002885789,40,'member2.jpg','female','ENT',
'Dumisani Kambi-Shamba earned his MS in Oriental Medicine from Pacific College of Oriental Medicine, 
NYC. A former Board Member and current member of the New York Acupuncture Society.'
,'المحافظة',0107969663,63,md5('DanielleM.D'),'from sunday to thursday',15);

insert into doctor values (5,'Stephen','j.','Stephenj.@gmail.com',010340789,33,'member3.jpg','male','Pediatrics',
"Dr. Stephen J. Coleman graduated from the University of Michigan Medical School in 1967.
 Dr. Coleman completed his Residency in Psychiatry at Bellevue Hopsital center."
,'المهندسين',0100059563,53,
md5('Stephen j.'),'from sunday to thursday',21),
                         
                         (6,'Joseph','M.D','JosephM.D@gmail.com',01002557895789,41,'member4.jpg','female','Ophthalmology',
"Flora's mission is to provide Eastern and Western treatments to all who seek to live a healthy and 
balanced lifestyle.She seeks to accomplish this by composing a treatment plan specifically for you"
,'الهلالى',0107969663,63,md5('DanielleM.D'),'from sunday to thursday',16);

insert into doctor values (7,'Michael','M.D','MichaelM.D@gmail.com',010340389,36,'member5.jpg','male','Orthopedics',
"LInitial appointment last 90 minutes and all following appointments last 60 minutes. Please provide 24
 hours notice if you need to reschedule your appointment.
"
,'رياض',0109059563,50,
md5('MichaelM.D'),'from sunday to thursday',14),
                         
                         (8,'Hasina','M.D','JosephM.D@gmail.com',01008589489,35,'member6.jpg','female','Cardiology',
"Lisa is a Licensed Acupuncturist (L.Ac.) currently practicing in New York City. She holds 
a Masters of Science degree from Pacific College of Oriental Medicine ."
,'عزت جلال',0107659663,100,md5('HasinaM.D'),'from sunday to thursday',10);


insert into doctor values (9,'Step','g.','Step.@gmail.com',010340222,27,'member3.jpg','male','Psychological and nervous',
"Dr. Step g. Coleman graduated from the University of Michigan Medical School in 1967.
 Dr. Coleman completed his Residency in Psychiatry at Bellevue Hopsital center."
,'المجافظه',0100059563,53,
md5('Stephen j.'),'from sunday to thursday',21),
                         
                         (10,'dalia','M.D','dalia@gmail.com',01002557895,30,'member4.jpg','female','heart',
"Flora's mission is to provide Eastern and Western treatments to all who seek to live a healthy and 
balanced lifestyle.She seeks to accomplish this by composing a treatment plan specifically for you"
,'الهلالى',0107969663,63,md5('DanielleM.D'),'from sunday to thursday',16);




insert into doctor values (11,'ali','gamal.','ali.@gmail.com',010340222,27,'member3.jpg','male','Ear nose and throat',
"Dr. Step g. Coleman graduated from the University of Michigan Medical School in 1967.
 Dr. Coleman completed his Residency in Psychiatry at Bellevue Hopsital center."
,'المحافظه',0100059563,53,
md5('Stephen j.'),'from sunday to thursday',21),
                         
                         (12,'nahed','mohammed','nahed@gmail.com',01002557895,25,'member4.jpg','female','heart',
"Flora's mission is to provide Eastern and Western treatments to all who seek to live a healthy and 
balanced lifestyle.She seeks to accomplish this by composing a treatment plan specifically for you"
,'النميس',0107969663,63,md5('DanielleM.D'),'from sunday to thursday',16);



insert into doctor values (13,'kamel','salah.','kamel.@gmail.com',010340222,27,'member3.jpg','male','Ear nose and throat',
"Dr. Step g. Coleman graduated from the University of Michigan Medical School in 1967.
 Dr. Coleman completed his Residency in Psychiatry at Bellevue Hopsital center."
,'المحافظه',0100059563,53,
md5('Stephen j.'),'from sunday to thursday',21),
                         
                         (14,'sara','mohammed','sara@gmail.com',01002557895,25,'member4.jpg','female','Psychological and nervous',
"Flora's mission is to provide Eastern and Western treatments to all who seek to live a healthy and 
balanced lifestyle.She seeks to accomplish this by composing a treatment plan specifically for you"
,'يسرى رآغب',0107969663,63,md5('DanielleM.D'),'from sunday to thursday',16);



insert into doctor values (15,'kamel','salah.','kamel.@gmail.com',010340222,27,'member3.jpg','male','Ear nose and throat',
"Dr. Step g. Coleman graduated from the University of Michigan Medical School in 1967.
 Dr. Coleman completed his Residency in Psychiatry at Bellevue Hopsital center."
,'المحافظه',0100059563,53,
md5('Stephen j.'),'from sunday to thursday',21),
                         
                         (16,'sara','mohammed','sara@gmail.com',01002557895,25,'member4.jpg','female','Psychological and nervous',
"Flora's mission is to provide Eastern and Western treatments to all who seek to live a healthy and 
balanced lifestyle.She seeks to accomplish this by composing a treatment plan specifically for you"
,'يسرى رآغب',0107969663,63,md5('DanielleM.D'),'from sunday to thursday',16);


insert into doctor values (17,'raouf','mahmoud.','raouf.@gmail.com',010340222,27,'member3.jpg','male','heart',
"Dr. Step g. Coleman graduated from the University of Michigan Medical School in 1967.
 Dr. Coleman completed his Residency in Psychiatry at Bellevue Hopsital center."
,'المحافظه',0100059563,53,
md5('Stephen j.'),'from sunday to thursday',21),
                         
                         (18,'sahar','rashad','sahar@gmail.com',01002557895,25,'member4.jpg','female','Ear nose and throat',
"Flora's mission is to provide Eastern and Western treatments to all who seek to live a healthy and 
balanced lifestyle.She seeks to accomplish this by composing a treatment plan specifically for you"
,'يسرى رآغب',0107969663,63,md5('DanielleM.D'),'from sunday to thursday',16);






CREATE TABLE patient (
  id int(11) NOT NULL auto_increment,
  first_name varchar(20) NOT NULL,
  last_name varchar(20) NOT NULL,
  age int(11) NOT NULL,
  phone int(11) NOT NULL,
  password text NOT NULL,
  street varchar(20) NOT NULL,
  email text NOT NULL,
  gender enum('female','male'),
  PRIMARY KEY  (id)
)  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

/* relation doctor & patient */

CREATE TABLE docrpatient (
  id_d int(11)  NULL references doctor(id) ,
  id_p int(11)  NULL references patient(id),
  PRIMARY KEY  (id_d,id_p)
)  ;

/* جدول الروشيته */

CREATE TABLE prescreption (
  id_R int(11) NOT NULL auto_increment,
  id_doc int(11) NULL references doctor(id),
  id_p int(11) NULL references patient(id),
  date   date  NOT NULL,
  PRIMARY KEY  (id_R)
) DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ; 

/* relation doctor & patient & prescreption */
CREATE TABLE d_p_r (
  id_doc int(11)  NULL references doctor(id),
  id_p int(11)  NULL references patient(id),
  id_R int(11)  NULL references prescreption(id_R),
  PRIMARY KEY  (id_doc,id_p,id_R)
)  DEFAULT CHARSET=utf8 ;


CREATE TABLE drug (

id int(11) NOT NULL auto_increment,
name_dr varchar(44) Not Null ,
number_dr int(11) Not Null ,
discrip_dr varchar(44) Not Null,
PRIMARY KEY(id)
)DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

/* relation prescreption & drug */

CREATE TABLE pres_drug (
  id_R int(11)  NULL references prescreption(id_R),
  id_dr int(11)  NULL references drug(id_dr),
  PRIMARY KEY  (id_R , id_dr)
)DEFAULT CHARSET=utf8 ;

/* جدول الامراض */

CREATE TABLE diseases (
  id int(11) NOT NULL auto_increment primary key,
  name_d varchar(50) NOT NULL,
  special varchar(50) NOT NULL
  
) DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

/* جدول الاعراض */
CREATE TABLE symptoms (
  id int(11) NOT NULL auto_increment,
  name_symptoms varchar(40) NOT NULL,
  name_s varchar(40) NOT NULL references specialize(name),
  PRIMARY KEY  (id)
)  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

INSERT INTO symptoms values 
(1,'Difficulty falling asleep','Psychological and nervous'),
(2,'Difficulty sataying asleep','Psychological and nervous'),
(3,'Difficulty getting outof bed','Psychological and nervous'),
(4,'Persistent loss of interest in previously enjoyed activities','Psychological and nervous'),
(5,'Avoiding people_places_activities','Psychological and nervous'),
(6,'Rapid mood changes','Psychological and nervous'),
(7,'Outbursts of anger','Psychological and nervous'),
(8,'Feeling NumbEating','Psychological and nervous'),
(9,'Depressed MoodDifficulty','Psychological and nervous'),
(10,'Anxiety/Panic attach','heart'),
(11,'Pain in paras','Orthopedic Department'),
(12,'Fear','heart'),
(13,'Helplessness','Psychological and nervous'),
(14,'Feeling or acting like a different person','Psychological and nervous'),
(15,'Holplessness','Psychological and nervous'),
(16,'Sadness','Psychological and nervous'),
(17,'Worthlessness','Psychological and nervous'),
(18,'energyIntrusive','heart'),
(19,'Easily started_feeling "jumpy"','Ear nose and throat'),
(20,'Dizziness','Orthopedic Department'),
(21,'Difficulty catching your breath','Ear nose and throat'),
(22,'Increase muscle tension','Orthopedic Department'),
(23,'Pain in shoulder','Orthopedic Department'),
(24,'Pain in the knee','Orthopedic Department'),
(25,'Racing thoughts','heart'),
(26,'Physical sensations','Psychological and nervous'),
(27,'Muscle or joint pain','Orthopedic Department'),
(28,'Chest pain or pressure','Ear nose and throat'),
(29,'Fever or chill','Ear nose and throat'),
(30,'Change in stools','Ear nose and throat'),
(31,'Rapid heart rate','heart'),
(32,'Binder Crusader','Orthopedic Department'),
(33,'Visual changes','Psychological and nervous'),
(34,'Cough','Ear nose and throat'),
(35,'Burning or tingling sensation','Psychological and nervous'),
(36,'Hearing Loss','Psychological and nervous'),
(37,'Abdominal pain','Ear nose and throat'),
(38,'Nausea or Vomiting','Ear nose and throat'),
(39,'Sore/Scratchy throat','Ear nose and throat'),
(40,'pain in heart','herat'),
(41,'Headache','Ear nose and throat'),
(42,'Balance problems','Psychological and nervous'),
(43,'Depressed Mood activity','Psychological and nervous'),
(44,'rapid heart rate','heart'),
(45,'Broken foot','Orthopedic Department'),
(46,'edema','heart'),
(47,'dysphinea','heart'),
(48,'orthopnea','heart'),
(49,'chest pain','heart'),
(50,'difficulty in swollowing','Ear nose and throat');


/* relation diseases & symptoms  هنا فى جوب بى عليه */

CREATE TABLE dise_symp (
  id_d int(11) NOT NULL references diseases(id) ,
  id_s int(11) NOT NULL references symptoms(id)
)  DEFAULT CHARSET=utf8 ;


/* relation patient & symptoms */

CREATE TABLE patientrsymp (
  id_P int(11)  NULL references patient(id),
  id_s int(11)  NULL references  symptoms(id)
)  DEFAULT CHARSET=utf8 ;

create table street(
  name varchar(20) not null primary key,
  longtitute double signed not null,
  latititue  double signed not null
)DEFAULT CHARSET=utf8 ;


CREATE TABLE analysis (
  id_doc int(11)  NULL references doctor(id),
  id_p int(11)  NULL  references patient(id),
  name varchar(20)  NULL,
  time date  NULL,
  descripe varchar(44)  NULL
) DEFAULT CHARSET=utf8 ;
/*  جدزل التخصصات */

create table  specialize(
  name varchar(40) NOT NULL,
  PRIMARY KEY  (name)
)DEFAULT CHARSET=utf8  ;

Insert into  specialize values('Psychological and nervous'),('Ear nose and throat'),('Orthopedic Department'),('heart');                   

create table  textmining(

  id_text int(11) NOT NULL auto_increment,
  name_text varchar(20) NOT NULL,
  PRIMARY KEY  (id_text)
)DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

CREATE TABLE special_text (
  id_spe int(11)  NULL references specialize(name),
  id_text int(11)  NULL references  textmining(id_text)
)DEFAULT CHARSET=utf8 ;

create table session(
   id  int not null,
   first_name varchar(20) NOT NULL,
   last_name varchar(20) NOT NULL,
   email text NOT NULL, 
   type enum('doctor','patient')
)DEFAULT CHARSET=utf8;

insert into specialize values('ENT'),('Dentist'),('Chiropractor'),('Dermotalogy'),('Pediatrics'),
                             ('Ophthalmology'),('Orthopedics'),('Cardiology');
                             
INSERT INTO street (name, longtitute, latititue) VALUES
('الجمهوريه', 27.187921, 31.186301),
('المحافظه', 27.190821, 31.189847),
('المساحه', 27.185338, 31.187029),
('المهندسين', 27.188516, 31.187206),
('النميس', 27.18545, 31.188064),
('الهلالى', 27.180088, 31.189249),
('تقسيم البترول', 27.182598, 31.192057),
('رياض', 27.18142, 31.192541),
('عزت جلال', 27.179284, 31.194122),
('فاروق كدوانى', 27.182813, 31.188423),
('كورنيش النيل', 27.185629, 31.194836),
('يسرى راغب', 27.181439, 31.184534);