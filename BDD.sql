-- Crear la base de datos
CREATE DATABASE worklike;
USE worklike;

-- Crear la tabla de categorías
CREATE TABLE category (
    id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(255)
);

-- Insertar las categorías
INSERT INTO category (name) VALUES 
('Tecnología'),
('Arte/Creatividad'),
('Ciencias Sociales'),
('Analítica/Lógica'),
('Liderazgo'),
('Aventura/Naturaleza');

-- Crear la tabla de trabajos
CREATE TABLE jobs (
    id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(255),
    category_id INT,
    FOREIGN KEY (category_id) REFERENCES category(id)
);

-- Insertar los trabajos y asignarles una categoría
INSERT INTO jobs (name, category_id) VALUES 
-- Tecnología (categoría 1)
('Ingeniero de Software', 1),
('Data Scientist', 1),
('Especialista en Ciberseguridad', 1),
('Desarrollador de Videojuegos', 1),
('Arquitecto de Sistemas en la Nube', 1),
('Ingeniero en Robótica', 1),
('Especialista en Inteligencia Artificial', 1),
('Diseñador de Experiencia de Usuario (UX/UI)', 1),
('Analista de Big Data', 1),
('Técnico en Redes y Telecomunicaciones', 1),

-- Arte/Creatividad (categoría 2)
('Diseñador Gráfico', 2),
('Ilustrador Digital', 2),
('Director de Cine', 2),
('Escritor/Guionista', 2),
('Músico o Compositor', 2),
('Diseñador de Moda', 2),
('Fotógrafo Profesional', 2),
('Artista Multimedia', 2),
('Animador 3D', 2),
('Director de Arte Publicitario', 2),

-- Ciencias Sociales (categoría 3)
('Psicólogo Clínico', 3),
('Sociólogo', 3),
('Trabajador Social', 3),
('Antropólogo Cultural', 3),
('Politólogo', 3),
('Historiador', 3),
('Consultor en Recursos Humanos', 3),
('Mediador Intercultural', 3),
('Coach de Vida', 3),
('Especialista en Género y Diversidad', 3),

-- Analítica/Lógica (categoría 4)
('Matemático Aplicado', 4),
('Físico Teórico', 4),
('Ingeniero Civil', 4),
('Actuario (Seguros/Finanzas)', 4),
('Estadístico', 4),
('Economista Cuantitativo', 4),
('Investigador Operativo', 4),
('Ingeniero Financiero', 4),
('Astrofísico', 4),
('Criptógrafo', 4),

-- Liderazgo (categoría 5)
('Gerente de Proyectos (PM)', 5),
('Emprendedor/Startup Founder', 5),
('Consultor Estratégico', 5),
('Director de Marketing Digital', 5),
('Analista de Inversiones', 5),
('Especialista en Comercio Internacional', 5),
('Jefe de Producto (Product Manager)', 5),
('Oficial de Cumplimiento (Compliance)', 5),
('Experto en Blockchain', 5),
('Líder de Innovación Corporativa', 5),

-- Aventura/Naturaleza (categoría 6)
('Médico Cirujano', 6),
('Biólogo Marino', 6),
('Nutricionista Clínico', 6),
('Epidemiólogo', 6),
('Genetista', 6),
('Veterinario', 6),
('Farmacéutico Investigador', 6),
('Fisioterapeuta Deportivo', 6),
('Neurocientífico', 6),
('Ingeniero Biomédico', 6),

-- Otros trabajos adicionales (asignados a categorías existentes)
('Geólogo Ambiental', 6),
('Ingeniero en Energías Renovables', 6),
('Guía de Ecoturismo', 6),
('Meteorólogo', 6),
('Agrónomo Sostenible', 6),
('Oceanógrafo', 6),
('Especialista en Conservación de Vida Silvestre', 6),
('Arborista Urbano', 6),
('Piloto de Drones para Monitoreo Ambiental', 6),
('Coordinador de Logística en Expediciones', 6),

('Periodista Investigativo', 3),
('Community Manager', 5),
('Profesor Universitario', 3),
('Intérprete de Lenguas', 3),
('Podcaster Educativo', 3),
('Especialista en Educación STEM', 3),
('Redactor Técnico', 3),
('Productor de Contenidos Digitales', 2),
('Bibliotecólogo Digital', 3),
('Diseñador de Cursos Online (E-learning)', 2),

('Ingeniero Aeroespacial', 1),
('Ingeniero en Nanotecnología', 1),
('Ingeniero de Materiales', 1),
('Ingeniero en Telecomunicaciones', 1),
('Ingeniero Mecatrónico', 1),
('Ingeniero de Sonido', 1),
('Ingeniero Químico', 1),
('Ingeniero en Realidad Virtual', 1),
('Ingeniero de Automatización Industrial', 1),
('Ingeniero de Transporte', 1),

('Especialista en Ética de IA', 1),
('Diseñador de Ciudades Inteligentes', 1),
('Experto en Agricultura Vertical', 6),
('Consultor de Metaverso', 1),
('Técnico en Impresión 3D Médica', 1),
('Analista de Huella de Carbono', 6),
('Hacker Ético (Pentester)', 1),
('Diseñador de Experiencias Inmersivas (AR/VR)', 1),
('Especialista en Longevidad y Bienestar', 6),
('Coordinador de Proyectos de Sostenibilidad', 6),


-- Añadir más trabajos a la categoría de Analítica/Lógica (categoría 4)

('Ingeniero de Datos', 4),
('Científico de Datos', 4),
('Analista de Inteligencia de Negocios (BI)', 4),
('Especialista en Machine Learning', 4),
('Arquitecto de Soluciones de Datos', 4),
('Analista de Sistemas', 4),
('Consultor de Optimización', 4),
('Especialista en Simulación', 4),
('Analista de Riesgos Financieros', 4),
('Ingeniero de Control de Calidad', 4),
('Especialista en Minería de Datos', 4),
('Analista de Procesos', 4),
('Consultor de Estrategia Cuantitativa', 4),
('Especialista en Visualización de Datos', 4),
('Analista de Mercado', 4),
('Ingeniero de Optimización Logística', 4),
('Especialista en Análisis Predictivo', 4),
('Consultor de Big Data', 4),
('Analista de Seguridad Informática', 4),
('Especialista en Análisis de Riesgos', 4),

-- Añadir más trabajos a la categoría de Liderazgo (categoría 5)

('Director de Operaciones (COO)', 5),
('Director Ejecutivo (CEO)', 5),
('Director de Recursos Humanos (CHRO)', 5),
('Director de Tecnología (CTO)', 5),
('Director Financiero (CFO)', 5),
('Director de Ventas', 5),
('Director de Comunicaciones Corporativas', 5),
('Director de Relaciones Públicas', 5),
('Director de Desarrollo de Negocios', 5),
('Director de Cadena de Suministro', 5),
('Director de Transformación Digital', 5),
('Director de Experiencia del Cliente (CXO)', 5),
('Director de Sostenibilidad Corporativa', 5),
('Director de Innovación', 5),
('Director de Riesgos', 5),
('Director de Calidad', 5),
('Director de Auditoría Interna', 5),
('Director de Relaciones Gubernamentales', 5),
('Director de Ética y Cumplimiento', 5),
('Director de Alianzas Estratégicas', 5),


-- Añadir más trabajos a la categoría de Aventura/Naturaleza (categoría 6)

('Geólogo de Exploración', 6),
('Ingeniero Forestal', 6),
('Especialista en Cambio Climático', 6),
('Biólogo de Conservación', 6),
('Guía de Montañismo', 6),
('Especialista en Energía Solar', 6),
('Ingeniero Hidrólogo', 6),
('Especialista en Ecología Marina', 6),
('Técnico en Parques Nacionales', 6),
('Guía de Safari', 6),
('Especialista en Restauración de Ecosistemas', 6),
('Ingeniero en Gestión de Residuos', 6),
('Especialista en Agricultura Orgánica', 6),
('Técnico en Acuicultura', 6),
('Guía de Buceo Profesional', 6),
('Especialista en Fauna Silvestre', 6),
('Ingeniero en Gestión de Aguas', 6),
('Especialista en Energía Eólica', 6),
('Guía de Expediciones Científicas', 6),
('Técnico en Monitoreo de Biodiversidad', 6);