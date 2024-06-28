use planification;

-- schoolyear
INSERT INTO
  schoolyears (schoolyear,time_per_session, schoolyear_start_date,created_at,updated_at)
VALUES
  ('2023/2024',1.33, '2023-09-15',NOW(),NOW()),
  ('2024/2025',1.33, '2024-01-01',NOW(),NOW()),
  ('2025/2026',1.33, '2025-09-01',NOW(),NOW());
  INSERT INTO
  global_weeks 
  (
    schoolyear_id,
    global_week_number,
    created_at,
    updated_at,
    start_week_date,
    end_week_date
  )
VALUES
  (1,1, NOW(), NOW(), '2024-03-10', '2024-03-14'),
  (1,2, NOW(), NOW(), '2024-03-17', '2024-03-12');

INSERT INTO 
  configs (current_schoolyear_id,current_global_week_id,created_at,updated_at)
VALUES 
  (1,1,NOW(),NOW());


-- battalions
INSERT INTO
  battalions (battalion,schoolyear_id,created_at,updated_at)
VALUES
  ('1',1,NOW(),NOW()),
  ('2',1,NOW(),NOW()),
  ('3',1,NOW(),NOW()),
  ('1',2,NOW(),NOW()),
  ('2',2,NOW(),NOW()),
  ('3',2,NOW(),NOW());

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
    2,
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
  companies (company, battalion_id, sector, default_room_id,created_at,updated_at)
VALUES
  (1, 1, 'PR', 1,NOW(),NOW()),
  (2, 1, 'PR', 2,NOW(),NOW()),
  (3, 1, 'PR', 3,NOW(),NOW()),
  (4, 1, 'PR', 4,NOW(),NOW()),
  (5, 1, 'PR', 5,NOW(),NOW()),
  (1, 2, 'ST', 6,NOW(),NOW()),
  (2, 2, 'ST', 7,NOW(),NOW()),
  (3, 2, 'ST', 8,NOW(),NOW()),
  (4, 2, 'MI', 9,NOW(),NOW()),
  (5, 2, 'MI', 10,NOW(),NOW()),
  (1, 3, 'ST', 11,NOW(),NOW()),
  (2, 3, 'ST', 11,NOW(),NOW()),
  (3, 3, 'ST', 12,NOW(),NOW()),
  (4, 3, 'MI', 13,NOW(),NOW()),
  (5, 3, 'MI', 14,NOW(),NOW()),
   (1, 4, 'PR', 1,NOW(),NOW()),
  (2, 4, 'PR', 2,NOW(),NOW()),
  (3, 4, 'PR', 3,NOW(),NOW()),
  (4, 4, 'PR', 4,NOW(),NOW()),
  (5, 4, 'PR', 5,NOW(),NOW()),
  (1, 5, 'ST', 6,NOW(),NOW()),
  (2, 5, 'ST', 7,NOW(),NOW()),
  (3, 5, 'ST', 8,NOW(),NOW()),
  (4, 5, 'MI', 9,NOW(),NOW()),
  (5, 5, 'MI', 10,NOW(),NOW()),
  (1, 6, 'ST', 11,NOW(),NOW()),
  (2, 6, 'ST', 11,NOW(),NOW()),
  (3, 6, 'ST', 12,NOW(),NOW()),
  (4, 6, 'MI', 13,NOW(),NOW()),
  (5, 6, 'MI', 14,NOW(),NOW());

-- Sections
INSERT INTO
  sections (section, company_id, default_room_id,created_at,updated_at)
VALUES
  -- 1st battalion
  (111, 1, 1,NOW(),NOW()),
  (112, 1, 1,NOW(),NOW()),
  (113, 1, 1,NOW(),NOW()),
  (121, 2, 1,NOW(),NOW()),
  (122, 2, 1,NOW(),NOW()),
  (123, 2, 1,NOW(),NOW()),
  (131, 3, 1,NOW(),NOW()),
  (132, 3, 1,NOW(),NOW()),
  (133, 3, 1,NOW(),NOW()),
  (141, 4, 1,NOW(),NOW()),
  (142, 4, 1,NOW(),NOW()),
  (143, 4, 1,NOW(),NOW()),
  (151, 5, 1,NOW(),NOW()),
  (152, 5, 1,NOW(),NOW()),
  (153, 5, 1,NOW(),NOW()),
  -- 2nd battalion
  (211, 6, 1,NOW(),NOW()),
  (212, 6, 1,NOW(),NOW()),
  (213, 6, 1,NOW(),NOW()),
  (221, 7, 1,NOW(),NOW()),
  (222, 7, 1,NOW(),NOW()),
  (223, 7, 1,NOW(),NOW()),
  (231, 8, 1,NOW(),NOW()),
  (232, 8, 1,NOW(),NOW()),
  (233, 8, 1,NOW(),NOW()),
  (241, 9, 1,NOW(),NOW()),
  (242, 9, 1,NOW(),NOW()),
  (243, 9, 1,NOW(),NOW()),
  (251, 10, 1,NOW(),NOW()),
  (252, 10, 1,NOW(),NOW()),
  (253, 10, 1,NOW(),NOW()),
  -- 3rd battalio,n
  (311, 11, 1,NOW(),NOW()),
  (312, 11, 1,NOW(),NOW()),
  (313, 11, 1,NOW(),NOW()),
  (321, 12, 1,NOW(),NOW()),
  (322, 12, 1,NOW(),NOW()),
  (323, 12, 1,NOW(),NOW()),
  (331, 13, 1,NOW(),NOW()),
  (332, 13, 1,NOW(),NOW()),
  (333, 13, 1,NOW(),NOW()),
  (341, 14, 1,NOW(),NOW()),
  (342, 14, 1,NOW(),NOW()),
  (343, 14, 1,NOW(),NOW()),
  (351, 15, 1,NOW(),NOW()),
  (352, 15, 1,NOW(),NOW()),
  (353, 15, 1,NOW(),NOW()),
   -- 1st battalion
  (111, 16, 1,NOW(),NOW()),
  (112, 16, 1,NOW(),NOW()),
  (113, 16, 1,NOW(),NOW()),
  (121, 17, 1,NOW(),NOW()),
  (122, 17, 1,NOW(),NOW()),
  (123, 17, 1,NOW(),NOW()),
  (131, 18, 1,NOW(),NOW()),
  (132, 18, 1,NOW(),NOW()),
  (133, 18, 1,NOW(),NOW()),
  (141, 19, 1,NOW(),NOW()),
  (142, 19, 1,NOW(),NOW()),
  (143, 19, 1,NOW(),NOW()),
  (151, 20, 1,NOW(),NOW()),
  (152, 20, 1,NOW(),NOW()),
  (153, 20, 1,NOW(),NOW()),
  -- 2nd battalion
  (211, 21, 1,NOW(),NOW()),
  (212, 21, 1,NOW(),NOW()),
  (213, 21, 1,NOW(),NOW()),
  (221, 22, 1,NOW(),NOW()),
  (222, 22, 1,NOW(),NOW()),
  (223, 22, 1,NOW(),NOW()),
  (231, 23, 1,NOW(),NOW()),
  (232, 23, 1,NOW(),NOW()),
  (233, 23, 1,NOW(),NOW()),
  (241, 24, 1,NOW(),NOW()),
  (242, 24, 1,NOW(),NOW()),
  (243, 24, 1,NOW(),NOW()),
  (251, 25, 1,NOW(),NOW()),
  (252, 25, 1,NOW(),NOW()),
  (253, 25, 1,NOW(),NOW()),
  -- 3rd battalio,n
  (311, 26, 1,NOW(),NOW()),
  (312, 26, 1,NOW(),NOW()),
  (313, 26, 1,NOW(),NOW()),
  (321, 27, 1,NOW(),NOW()),
  (322, 27, 1,NOW(),NOW()),
  (323, 27, 1,NOW(),NOW()),
  (331, 28, 1,NOW(),NOW()),
  (332, 28, 1,NOW(),NOW()),
  (333, 28, 1,NOW(),NOW()),
  (341, 29, 1,NOW(),NOW()),
  (342, 29, 1,NOW(),NOW()),
  (343, 29, 1,NOW(),NOW()),
  (351, 30, 1,NOW(),NOW()),
  (352, 30, 1,NOW(),NOW()),
  (353, 30, 1,NOW(),NOW());

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

