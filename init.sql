use planification;

-- schoolyear
INSERT INTO
  schoolyears (schoolyear, schoolyear_start_date,created_at,updated_at)
VALUES
  ('2023/2024', '2023-09-15',NOW(),NOW()),
  ('2024/2025', '2024-01-01',NOW(),NOW());

INSERT INTO 
  configs (schoolyear_id,created_at,updated_at)
VALUES 
  (1,NOW(),NOW());
INSERT INTO
  global_weeks 
  (
    schoolyear_id,
    created_at,
    updated_at,
    start_week_date,
    end_week_date
  )
VALUES
  (1, NOW(), NOW(), '2024-03-10', '2024-03-14'),
  (1, NOW(), NOW(), '2024-03-17', '2024-03-12');

-- battalions
INSERT INTO
  battalions (battalion,schoolyear_id)
VALUES
  ('1',1),
  ('2',1),
  ('3',1),
  ('1',2),
  ('2',2),
  ('3',2);

INSERT INTO
  weeks (
    global_week_id,
    week_number,
    battalion_id,
    semester,
    week_type,
    sport_exam,
    cc,
    updated_at,
    created_at
  )
VALUES
  (
    1,
    1,
    3,
    '1',
    'Cours Magistreaux',
    0,
    1,
    NOW(),
    NOW()
  ),
  (
    1,
    1,
    2,
    '1',
    'Cours',
    1,
    1,
    NOW(),
    NOW()
  ),
  (
    1,
    1,
    1,
    '1',
    'Cours',
    1,
    0,
    NOW(),
    NOW()
  ),
   (
    2,
    1,
    3,
    '1',
    'Conge',
    0,
    1,
    NOW(),
    NOW()
  ),
  (
    2,
    1,
    2,
    '1',
    'Formation Miliaire',
    1,
    1,
    NOW(),
    NOW()
  ),
  (
    2,
    1,
    1,
    '1',
    'Cours',
    1,
    0,
    NOW(),
    NOW()
  )
  ;

-- rooms
INSERT INTO
  rooms (room, capacity_exams, capacity_teaching)
VALUES
  ('A1', 40, 100),
('A2', 40, 100),
('A3', 36, 70),
('A4', 36, 70),
('A5', 36, 70),
('A6', 36, 70),
('A7', 36, 70),
('A8', 36, 70),
('A9', 15, 30),
('A10', 15, 30),
('A11', 15, 30),
('A12', 15, 30),
  ('A13', 15, 30),
('A14', 15, 30),
('A15', 15, 30),
('A16', 15, 30),
('A17', 15, 30),
('A18', 15, 30),
('A19', 15, 30),
('A20', 15, 30),
('A21', 15, 30),
('A22', 15, 30),
('B1', 36, 70),
('B2', 36, 70),
  ('B3', 36, 70),
('B4', 36, 70),
('B5', 0, 70),
('B6', 0, 70),
('B7', 0, 70),
('B8', 0, 70),
('B9', 0, 30),
('B10', 0, 30),
('B11', 0, 30),
('B12', 0, 30),
('C1', 15, 30),
('C2', 15, 30),
('C3', 15, 30),
  ('C4', 15, 30),
('C5', 15, 30),
('C6', 15, 30),
('C7', 15, 30),
('C8', 15, 30),
('C9', 15, 30),
('C10', 15, 30),
('C11', 15, 30),
('C12', 15, 30),
('D1', 15, 30),
('D2', 15, 30),
('D3', 15, 30),
  ('D4', 15, 30),
('D5', 15, 30),
('D6', 15, 30),
('D7', 15, 30),
('D8', 15, 30),
('D9', 15, 30),
('D10', 15, 30),
('D11', 15, 30),
('D12', 15, 30),
('D13', 15, 30),
('D14', 15, 30),
('D15', 15, 30),
('D16', 15, 30),
  ('D17', 15, 30),
('D18', 15, 30),
('D19', 15, 30),
('D20', 15, 30),
('D21', 15, 30),
('D22', 15, 30),
('D23', 15, 30),
('Labo de langues', 0, 30),
('Labo de physique', 0, 30),
('Labo de chimie', 0, 30),
('Labo de techno', 0, 30),
  ('Atelier', 0, 30),
('bibliotheque', 0, 30),
('stade', 0, 30);

-- Companies
INSERT INTO
  companies (company, battalion_id, sector, default_room_id)
VALUES
  (1, 1, 'PR', 1),
  (2, 1, 'PR', 2),
  (3, 1, 'PR', 3),
  (4, 1, 'PR', 4),
  (5, 1, 'PR', 5),
  (1, 2, 'ST', 6),
  (2, 2, 'ST', 7),
  (3, 2, 'ST', 8),
  (4, 2, 'MI', 9),
  (5, 2, 'MI', 10),
  (1, 3, 'ST', 11),
  (2, 3, 'ST', 11),
  (3, 3, 'ST', 12),
  (4, 3, 'MI', 13),
  (5, 3, 'MI', 14),
   (1, 4, 'PR', 1),
  (2, 4, 'PR', 2),
  (3, 4, 'PR', 3),
  (4, 4, 'PR', 4),
  (5, 4, 'PR', 5),
  (1, 5, 'ST', 6),
  (2, 5, 'ST', 7),
  (3, 5, 'ST', 8),
  (4, 5, 'MI', 9),
  (5, 5, 'MI', 10),
  (1, 6, 'ST', 11),
  (2, 6, 'ST', 11),
  (3, 6, 'ST', 12),
  (4, 6, 'MI', 13),
  (5, 6, 'MI', 14);

-- Sections
INSERT INTO
  sections (section, company_id, default_room_id)
VALUES
  -- 1st battalion
  (111, 1, 1),
  (112, 1, 1),
  (113, 1, 1),
  (121, 2, 1),
  (122, 2, 1),
  (123, 2, 1),
  (131, 3, 1),
  (132, 3, 1),
  (133, 3, 1),
  (141, 4, 1),
  (142, 4, 1),
  (143, 4, 1),
  (151, 5, 1),
  (152, 5, 1),
  (153, 5, 1),
  -- 2nd battalion
  (211, 6, 1),
  (212, 6, 1),
  (213, 6, 1),
  (221, 7, 1),
  (222, 7, 1),
  (223, 7, 1),
  (231, 8, 1),
  (232, 8, 1),
  (233, 8, 1),
  (241, 9, 1),
  (242, 9, 1),
  (243, 9, 1),
  (251, 10, 1),
  (252, 10, 1),
  (253, 10, 1),
  -- 3rd battalio,n
  (311, 11, 1),
  (312, 11, 1),
  (313, 11, 1),
  (321, 12, 1),
  (322, 12, 1),
  (323, 12, 1),
  (331, 13, 1),
  (332, 13, 1),
  (333, 13, 1),
  (341, 14, 1),
  (342, 14, 1),
  (343, 14, 1),
  (351, 15, 1),
  (352, 15, 1),
  (353, 15, 1),
   -- 1st battalion
  (111, 16, 1),
  (112, 16, 1),
  (113, 16, 1),
  (121, 17, 1),
  (122, 17, 1),
  (123, 17, 1),
  (131, 18, 1),
  (132, 18, 1),
  (133, 18, 1),
  (141, 19, 1),
  (142, 19, 1),
  (143, 19, 1),
  (151, 20, 1),
  (152, 20, 1),
  (153, 20, 1),
  -- 2nd battalion
  (211, 21, 1),
  (212, 21, 1),
  (213, 21, 1),
  (221, 22, 1),
  (222, 22, 1),
  (223, 22, 1),
  (231, 23, 1),
  (232, 23, 1),
  (233, 23, 1),
  (241, 24, 1),
  (242, 24, 1),
  (243, 24, 1),
  (251, 25, 1),
  (252, 25, 1),
  (253, 25, 1),
  -- 3rd battalio,n
  (311, 26, 1),
  (312, 26, 1),
  (313, 26, 1),
  (321, 27, 1),
  (322, 27, 1),
  (323, 27, 1),
  (331, 28, 1),
  (332, 28, 1),
  (333, 28, 1),
  (341, 29, 1),
  (342, 29, 1),
  (343, 29, 1),
  (351, 30, 1),
  (352, 30, 1),
  (353, 30, 1);

-- Departments 
INSERT INTO
  departments (department)
VALUES
  ('informatique'),
  ('phisyque'),
  ('technologie'),
  ('mathematiques'),
  ('chimie'),
  ('sciences humaines');

-- Timings 
INSERT INTO
  timings (session_start, session_finish)
VALUES
  ('08:00:00', '09:20:00'),
  ('09:30:00', '10:50:00'),
  ('11:00:00', '12:20:00'),
  ('13:30:00', '14:50:00'),
  ('15:00:00', '16:20:00');

INSERT INTO
  teachers (
    teacher_name,
    teacher_grade,
    teacher_type,
    department_id,
    created_at,
    updated_at
  )
VALUES
 
('ZAIUCHE', 'Maitre A', 'ENPEI', 1,NOW(),NOW()),
('BOULAHIA','Maitre A','EMP','1',NOW(),NOW()),
('HOSNI', 'Maitre A', 'EMP', 1,NOW(),NOW()),
('LAMRI', 'Maitre A', 'ENPEI', 1,NOW(),NOW()),
('MAZARI', 'Maitre A', 'EMP', 1,NOW(),NOW()),
('BOUSSAHA', 'Maitre A', 'vacataire', 2,NOW(),NOW()),
('BERANI', 'Maitre A', 'vacataire', 1,NOW(),NOW()),
('TIKAROUCHINE', 'Maitre A', 'EMP', 2,NOW(),NOW()),
('HABBOUCHE', 'Maitre A', 'vacataire', 2,NOW(),NOW()),
('REDJAMIA', 'Maitre A', 'ENPEI', 4,NOW(),NOW()),
('GUETTAF', 'Maitre A', 'Détaché', 4,NOW(),NOW()),
('CHOUH', 'Maitre A', 'Détaché',4,NOW(),NOW()),
('DJELLOULI', 'Maitre A', 'ENPEI',4,NOW(),NOW()),
('BELMADANI', 'Maitre A', 'ENPEI',4,NOW(),NOW()),
('LAADJ', 'Maitre A', 'vacataire',4,NOW(),NOW()),
('KACIMI', 'Maitre A', 'vacataire',4,NOW(),NOW()),
('MAHOUI', 'Maitre A', 'vacataire',4,NOW(),NOW()),
('BELGHAZI', 'Maitre A', 'vacataire',4,NOW(),NOW()),
('BENNANI', 'Maitre A', 'Détaché',4,NOW(),NOW()),
('BOUZEHHAR', 'Maitre A', 'vacataire',4,NOW(),NOW()),
('BENCHETTAH', 'Maitre A', 'ENPEI',4,NOW(),NOW()),
('MAMECHE', 'Maitre A', 'Détaché',4,NOW(),NOW()),
('SELAMA', 'Maitre A', 'Vacataire',6,NOW(),NOW()),
('ZIBANI', 'Maitre A', 'ENPEI',1,NOW(),NOW()),
('ZAGHWANI', 'Maitre A', 'ENPEI',1,NOW(),NOW()),
('CHERIFI', 'Maitre A', 'EMP',1,NOW(),NOW()),
('ADDI', 'Maitre A', 'Détaché',2,NOW(),NOW()),
('YAHIAOUI', 'Maitre A', 'Détaché',2,NOW(),NOW()),
('CHELLAL', 'Maitre A', 'Détaché',2,NOW(),NOW()),
('YAHIA', 'Maitre A', 'Détaché',2,NOW(),NOW()),
('BENAISSA', 'Maitre A', 'ENPEI',2,NOW(),NOW()),
('TIDMIMT', 'Maitre A', 'Vacataire',6,NOW(),NOW()),
('TIKOUDANE', 'Maitre A', 'Vacataire',6,NOW(),NOW()),
('DERRAHI', 'Maitre A', 'Vacataire',6,NOW(),NOW()),
('SAOUDI', 'Maitre A', 'ENPEI',2,NOW(),NOW()),
('MERZOUG', 'Maitre A', 'ENPEI',2,NOW(),NOW()),
('BOUBAKIR', 'Maitre A', 'ENPEI',2,NOW(),NOW()),
('BOULAHIA', 'Maitre A', 'ENPEI',2,NOW(),NOW()),
('CHELLALI', 'Maitre A', 'ENPEI',2,NOW(),NOW()),
('CHAIBI', 'Maitre A', 'ENPEI',2,NOW(),NOW()),
('RAHIM', 'Maitre A', 'ENPEI',1,NOW(),NOW()),
('DERBALA', 'Maitre A', 'ENPEI',2,NOW(),NOW()),
('BOUATELLI', 'Maitre A', 'Détaché',2,NOW(),NOW()),
('BAHAMIDA', 'Maitre A', 'Vacataire',2,NOW(),NOW()),
('BENCHERIET', 'Maitre A', 'Vacataire',2,NOW(),NOW()),
('BACHA', 'Maitre A', 'Détaché',2,NOW(),NOW()),
('OUATIZERGA', 'Maitre A', 'Vacataire',2,NOW(),NOW()),
('MEZIANI', 'Maitre A', 'ENPEI',4,NOW(),NOW()),
('BENMANSOUR', 'Maitre A', 'ENPEI',4,NOW(),NOW()),
('ZELMATI', 'Maitre A', 'EMP',1,NOW(),NOW()),
 ('ADDAR', 'Maitre A', 'Détaché',6,NOW(),NOW()),
 ('MEBREK', 'Maitre A', 'Détaché',4,NOW(),NOW()),
 ('FELLAH', 'Maitre A', 'Détaché',4,NOW(),NOW()),
('TALEB', 'Maitre A', 'Vacataire',4,NOW(),NOW()),
('DJELLOULI', 'Maitre A', 'ENPEI',1,NOW(),NOW()),
('BOUDANE', 'Maitre A', 'EMP',1,NOW(),NOW()),
('MAHANI', 'Maitre A', 'Détaché',1,NOW(),NOW()),
('KECHID', 'Maitre A', 'Détaché',1,NOW(),NOW()),
('HABBOUCHI', 'Maitre A', 'EMP',1,NOW(),NOW()),
('OUKID', 'Maitre A', 'EMP',1,NOW(),NOW()),
('EL YOUSFI', 'Maitre A', 'EMP',4,NOW(),NOW()),
('BENADDAD', 'Maitre A', 'ENPEI',4,NOW(),NOW()),
('SEHAKI', 'Maitre A', 'EMP',1,NOW(),NOW()),
('BOUDERBAL', 'Maitre A', 'ENPEI',1,NOW(),NOW()),
('HABACHI', 'Maitre A', 'ENPEI',2,NOW(),NOW()),
('MAACHOU', 'Maitre A', 'Vacataire',4,NOW(),NOW()),
('ZITOUT', 'Maitre A', 'Vacataire',4,NOW(),NOW()),
('CHENAIFI', 'Maitre A', 'ENPEI',2,NOW(),NOW()),
('KIOUS', 'Maitre A', 'ENPEI',2,NOW(),NOW()),
('ABBOU', 'Maitre A', 'ENPEI',2,NOW(),NOW()),
('BOUCHEDJRA', 'Maitre A', 'ENPEI',2,NOW(),NOW()),
('AISSANI', 'Maitre A', 'Détaché',2,NOW(),NOW()),
('LATRECHE', 'Maitre A', 'ENPEI',2,NOW(),NOW()),
('HAMADOU', 'Maitre A', 'ENPEI',2,NOW(),NOW()),
('BEZZIOU', 'Maitre A', 'EMP',2,NOW(),NOW()),
('BENBOUZID', 'Maitre A', 'EMP',2,NOW(),NOW()),
('CHEKOUR', 'Maitre A', 'Détaché',2,NOW(),NOW()),
('ROUALI', 'Maitre A', 'ENPEI',1,NOW(),NOW()),
('BELAGOUNE', 'Maitre A', 'DSS',1,NOW(),NOW()),
('TITRI', 'Maitre A', 'ENPEI',2,NOW(),NOW());











