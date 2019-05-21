------------------------------
-- Archivo de base de datos --
------------------------------

DROP TABLE IF EXISTS usuarios CASCADE;

CREATE TABLE usuarios
(
    id          bigserial       PRIMARY KEY
  , nombre      varchar(255)    NOT NULL UNIQUE
  , email       varchar(255)    NOT NULL
  , password    varchar(255)    NOT NULL
  , auth_key    varchar(255)
  , token_val   varchar(255)    UNIQUE
  , created_at  timestamp(0)    NOT NULL
);

INSERT INTO usuarios (nombre, email, password, created_at)
    VALUES ('Sedeo', 'sedeo95@gmail.com', crypt('prueba', gen_salt('bf', 13)), current_timestamp);

DROP TABLE IF EXISTS habilidades CASCADE;

CREATE TABLE habilidades
(
    id              bigserial       PRIMARY KEY
  , nombre          varchar(255)    NOT NULL
  , descripcion     varchar(1000)
);

INSERT INTO habilidades (nombre, descripcion)
    VALUES ('Blazing Circlet', 'Realiza dos impactos de 304/338/375% de daño de fuego a enemigos circundantes.')
         , ('Exalted Fire', 'Realiza un impacto de 608/638% de daño de fuego a enemigos en una línea y reduce su defensa en un 5% por 10 segundos con un 90% de probabilidad base.')
         , ('Brave Bastion', 'Incrementa el ataque de todo el equipo en un 10/15/20% por 15 segundos.')
         , ('Hallowed Waters', 'Realiza un impacto de 679/754% de daño de agua al objetivo y a enemigos cercanos.')
         , ('Tornado Bash', 'Realiza 4 impactos de 231/257/285% de daño de viento a enemigos circundantes y los atrae hacia el usuario durante 0,5 segundos.')
         , ('Storm Wall', 'Da a todos los aliados un escudo que anula un único ataque de hasta el 20/30% de la vida máxima del usuario.')
         , ('Radiant Bonds', 'Realiza un disparo de 699/734/771% de daño de luz al objetivo, e inflinge parálisis durante 13 segundos – causando un 66/88,3% de daño cada 3,99 segundos – con una probabilidad base de 100/110%.')
         , ('Bolt of Light', 'Realiza un disparo de 699/777% de daño de luz en una línea.')
         , ('Elder Cure', 'Restaura vida a todos aliados con un 72/90/108% de Potencia de Recuperación y cura parálisis.')
         , ('Ancient Aegis', 'Aumenta la defensa de todo el equipo en un 15/20%.')
         , ('Ravenous Fire', 'Realiza 2 impactos de 431/479/532% de daño de fuego a enemigos directamente enfrente, y activa “Postura del Fulgor” durante 20 segundos si el ataque impacta. Durante Postura del Fulgor, la fuerza y las habilidades del usuario se ven incrementadas en un 10%, y se recibe acceso a Ravenous Fire (Fulgor). Ravenous Fire (Fulgor) realiza 3 impactos de 287/319/354% de daño de fuego, concluye Postura del Fulgor, y activa “Postura de Ruina” durante 15 segundos. Durante Postura de Ruina, la fuerza y las habilidades del usuario se ven incrementadas en un 15%, y se recibe acceso a Ravenous Fire (Ruina). Ravenous Fire (Ruina) realiza 3 impactos de 173/192/213% de daño de fuego, un impacto final de 345/383/425% de daño de fuego y concluye Postura de Ruina.')
         , ('Kindled Heart', 'Aumenta el ratio de ataque del usuario en un 15/20% por 10 segundos.')
         , ('Majestic Tide', 'Realiza 1 impacto de 668/743/825% de daño de agua a enemigos en una línea. Cuantas más mejoras tenga el usuario, mayor será la mejora dada por esta habilidad, y mayor será el daño (5% por cada mejora).')
         , ('Royal Maelstrom', 'Realiza 3 impactos de 223/248% de daño de agua a enemigos circundantes.')
         , ('Save the Day!', 'Realiza 6 impactos de 146/154/161% de daño de viento al objetivo y a enemigos cercanos.')
         , ('Not One Step Closer!', 'Realiza 4 disparos de 219/244% de daño de viento a enemigos en una línea.')
         , ('Radiant Savior', 'Cura a todos los aliados con un 72%/90/108% de Potencia de Recuperación y cura maldición.')
         , ('Sacred Guardian', 'Da a todos los aliados un escudo que anula un único ataque de menos del 20/30% de la vida del usuario, y aplica regeneración durante 15 segundos, curando con un 25/29% de Potencia de Regeneración cada 2,99 segundos. No acumulable con ningún otro escudo.')
         , ('Night of Antiquity', 'Realiza 8 impactos de 96/101/106% de daño de oscuro al objetivo y enemigos cercanos. Contra enemigos cegados, realiza 8 impactos de 170,69%/184,44% de daño de oscuro en su lugar.')
         , ('Twilight Oblivion', 'Activa “Flechas del Crepúsculo”. Los tres siguientes ataques cargados causarán un 31/34% (33%/37% con ataques cargados de nivel 2) de daño oscuro, y causarán ceguera (50% de probabilidades de fallar en cada ataque) durante 8 segundos con un 100/110% de probabilidad base.')
         , ('Flamewhorl', 'Realiza 3 impactos de 183/203/226% de daño de fuego a enemigos circundantes.')
         , ('Subterfuge', 'Realiza 2 impactos de 275/288% de daño de fuego a enemigos directamente enfrente, y reduce su defensa en un 5% durante 10 segundos con un 30% de probabilidad base.')
         , ('Quester''s Best', 'Realiza 2 impactos de 420/466/518% de daño de agua a enemigos circundantes y los atrae hacia el usuario durante 0,5 segundos.')
         , ('Indomitable Will', 'Da a los aliados un escudo que anula un único golpe de hasta el 15/20% de la vitalidad máxima del usuario. No se acumula con ningún otro escudo.')
         , ('Maid for Mayhem', 'Incrementa el ataque de todo el equipo en un 8/10/15% durante 15 segundos.')
         , ('Tyro''s Gyre', 'Realiza 3 impactos de 238/264% de daño de viento a enemigos inmediatamente enfrente.')
         , ('Blaze of Gold', 'Realiza 2 impactos de 309/343/381% de daño de luz a enemigos circundantes.')
         , ('Pride of the Forge', 'Aumenta la fuerza del equipo en un 8/10% durante 15 segundos.')
         , ('Endless Nightmare', 'Realiza un disparo de 725/805/895% de daño oscuro a enemigos en una línea.')
         , ('Dark Abyss', 'Realiza un impacto de 725/805% de daño oscuro al objetivo y a enemigos cercanos.')
         , ('Promethean Flame', 'Realiza un impacto de 504/560% de daño de fuego al objetivo y a enemigos cercanos.')
         , ('Tidal Stream', 'Realiza un impacto de 869,4/913,5% de daño de agua a enemigos directamente enfrente, y les causa estancamiento durante 8 segundos con un 160/180% de probabilidad base.')
         , ('Grand Tempest', 'Realiza un impacto de 619,5/650,3% de daño de viento a enemigos en una línea, y les causa aturdimiento durante 5-6/6-7 segundos con un 160/180% de probabilidad base.')
         , ('Saint''s Banner', 'Realiza un impacto de 743,4/826% de daño de luz a enemigos circundantes, e incrementa la defensa del equipo en un 25/30% durante 15 segundos.')
         , ('Daybreak Flurry', 'Realiza 6 impactos de 99/104% de daño de oscuridad a enemigos directamente enfrente, y les causa sangrado durante 30 segundos, causando 110/146% de daño cada 4,99 segundos, con un 90/100% de probabilidad base.');

DROP TABLE IF EXISTS pasivas CASCADE;

CREATE TABLE pasivas
(
    id              bigserial       PRIMARY KEY
  , nombre          varchar(255)    NOT NULL
  , descripcion     varchar(1000)
);

INSERT INTO pasivas (nombre, descripcion)
    VALUES ('Dragon''s Claws', 'Cada transformación incrementa el ataque durante el resto de la misión (hasta tres veces por misión). La primera transformación incrementa el ataque un 4/5% en total. La segunda, un 10/13% en total. La tercera, un 20/25% en total.')
         , ('Stun Res', 'Reduce susceptibilidad al aturdimiento en un 50/100%.')
         , ('Player EXP', 'Incrementa la ganancia de experiencia de jugador en un 10/15%. Esta habilidad no se acumula con habilidades similares; se aplicará el valor más alto.')
         , ('Buff Time', 'Incrementa la duración de las habilidades de mejora en un 20/25%.')
         , ('Burn Res', 'Reduce la susceptibilidad a las quemaduras en un 25/50%.')
         , ('Stun Res', 'Reduce la susceptibilidad al aturdimiento en un 25%.')
         , ('Slayer''s Strength', 'Aumenta la fuerza en un 4/5% por cada 5 enemigos derrotados (hasta 5 veces por misión).')
         , ('Bog Res', 'Reduce la susceptibilidad al estancamiento en un 50/100%.')
         , ('Last Defense', 'Aumenta la defensa en un 50% cuando la vitalidad baja por debajo del 30% (solo una vez por misión).')
         , ('Full HP = Strength', 'Al tener la vitalidad completa, inclementa la fuerza en un 10/13%.')
         , ('Curse Res', 'Reduce la susceptibilidad a maldiciones en un 25/50%.')
         , ('Poison Res', 'Reduce la susceptibilidad al veneno en un 25%.')
         , ('Skill Prep', 'Empieza las misiones con las barras de las habilidades llenas al 50/75%.')
         , ('Paralysis Res', 'Reduce la susceptibilidad a la parálisis en un 50/75%.')
         , ('HP 70 = Defense', 'Aumenta la defensa en un 8% cuando la vida es un 70% o más.')
         , ('HP 70 = Critical Rate', 'Aumenta la probabilidad de asestar golpes críticos en un 8/10% cuando la vida está a 70% o más.')
         , ('Critical Rate', 'Aumenta la probabilidad de asestar golpes críticos en un 6/8%.')
         , ('Striker''s Strength', 'Aumenta el ataque en un 5/6% por cada 3 enemigos derrotados con ataques de fuerza (hasta cinco veces por misión).')
         , ('Force Strike', 'Aumenta el daño de los ataques cargados en un 40/50%.')
         , ('Full HP = Skill Damage', 'Incrementa la fuerza de las habilidades en un 35/40% cuando la vida está llena.')
         , ('Skill Prep', 'Llena las barras de las habilidades al empezar las misiones en un 75/100%.')
         , ('Curse Res', 'Reduce la susceptibilidad a maldiciones en un 50/100%.')
         , ('HP 70 = Healing', 'Aumenta la potencia de las habilidades de cura en un 13/15% cuando la vida está al 70% o más.')
         , ('Full HP = Blindness', 'Aumenta las probabilidades de causar ceguera en un 50/60% al tener la vida completa.')
         , ('Paralysis Res', 'Reduce la susceptibilidad a parálisis en un 50/100%.')
         , ('Blinded Punisher', 'Incrementa el daño a enemigos cegados en un 25/30%.')
         , ('Flurry Devastation', 'Aumenta la probabilidad de asestar golpes críticos en un 5/8% cuando el combo actual es de 15 golpes o más.')
         , ('Curse Res', 'Reduce la susceptibilidad a maldiciones en un 25%.')
         , ('Critical Damage', 'Añade un 10/13% al modificador de daño en los golpes críticos.')
         , ('Blindness Res', 'Reduce la susceptibilidad a la ceguera en un 25/50%.')
         , ('Blindness Res', 'Reduce la susceptibilidad a la ceguera en un 25%.')
         , ('Full HP = Critical Rate', 'Aumenta la probabilidad de causar golpes críticos en un 6/8% cuando la vida está llena.')
         , ('Freeze Res', 'Reduce la susceptibilidad a la congelación en un 25/50%.')
         , ('Freeze Res', 'Reduce la susceptibilidad a la congelación en un 25%.')
         , ('Full HP = Defense', 'Aumenta la defensa en un 15/20% cuando la vida está llena.')
         , ('Poison Res', 'Reduce la susceptibilidad a veneno en un 25/50%.')
         , ('Full HP = Skill Damage', 'Aumenta el daño causado por habilidades en un 25/30% cuando la vida está llena.')
         , ('Paralysis Res', 'Reduce la susceptibilidad a parálisis en un 25/50%.')
         , ('Paralysis Res', 'Reduce la susceptibilidad a parálisis en un 25%.')
         , ('(Flame) Strength & Wind Res', 'Si el usuario está armonizado al fuego, aumenta el ataque en un 35/50% y la resistencia al viento en un 15%.')
         , ('(Water) Strength', 'Si el usuario está armonizado al agua, aumenta el ataque en un 40/60%.')
         , ('(Wind) HP & Strength', 'Si el usuario está armonizado al viento, aumenta el ataque y la vida en un 15/20%.')
         , ('Dragon Time', 'Aumenta el tiempo de transformación en un 15/20%.')
         , ('(Light) HP', 'Si el usuario está armonizado a la luz, aumenta la vida en un 40/60%.')
         , ('(Shadow) Strength', 'Si el usuario está armonizado a la oscuridad, aumenta el ataque en un 40/60%.');

DROP TABLE IF EXISTS cohabilidades CASCADE;

CREATE TABLE cohabilidades
(
    id              bigserial           PRIMARY KEY
  , nombre          varchar(255)        NOT NULL
  , descripcion     varchar(255)
  , lvl1            numeric(2)
  , lvl2            numeric(2)
  , lvl3            numeric(2)
  , lvl4            numeric(2)
  , lvl5            numeric(2)
);

INSERT INTO cohabilidades (nombre, descripcion, lvl1, lvl2, lvl3, lvl4, lvl5)
    VALUES ('Dragon Haste', 'Incrementa la velocidad de carga de la barra de transformación en un 2/5/8/11/15%. Beneficia a todo tu equipo.', 2, 5, 8, 11, 15)
         , ('Dragon Haste', 'Incrementa la velocidad de carga de la barra de transformación en un 5/6/8/11/15%. Beneficia a todo tu equipo.', 5, 6, 8, 11, 15)
         , ('Dragon Haste', 'Incrementa la velocidad de carga de la barra de transformación en un 8/9/11/12/15%. Beneficia a todo tu equipo.', 8, 9, 11, 12, 15)
         , ('Strength', 'Aumenta el ataque en un 1/3/5/7/10%. Beneficia a todo tu equipo.', 1, 3, 5, 7, 10)
         , ('Strength', 'Aumenta el ataque en un 3/4/5/7/10%. Beneficia a todo tu equipo.', 3, 4, 5, 7, 10)
         , ('Strength', 'Aumenta el ataque en un 5/6/7/8/10%. Beneficia a todo tu equipo.', 5, 6, 7, 8, 10)
         , ('Critical Rate', 'Aumenta la probabilidad de asestar golpes críticos en un 1/3/5/7/10%. Beneficia a todo tu equipo.', 1, 3, 5, 7, 10)
         , ('Critical Rate', 'Aumenta la probabilidad de asestar golpes críticos en un 3/4/5/7/10%. Beneficia a todo tu equipo.', 3, 4, 5, 7, 10)
         , ('Critical Rate', 'Aumenta la probabilidad de asestar golpes críticos en un 5/6/7/8/10%. Beneficia a todo tu equipo.', 5, 6, 7, 8, 10)
         , ('Defense', 'Aumenta la defensa en un 5/7/9/11/15%. Beneficia a todo tu equipo.', 5, 7, 9, 11, 15)
         , ('Defense', 'Aumenta la defensa en un 7/8/9/11/15%. Beneficia a todo tu equipo.', 7, 8, 9, 11, 15)
         , ('Defense', 'Aumenta la defensa en un 9/10/11/12/15%. Beneficia a todo tu equipo.', 9, 10, 11, 12, 15)
         , ('HP', 'Incrementa la vitalidad en un 5/7/9/12/15%. Beneficia a todo tu equipo.', 5, 7, 9, 12, 15)
         , ('HP', 'Incrementa la vitalidad en un 7/8/9/12/15%. Beneficia a todo tu equipo.', 7, 8, 9, 12, 15)
         , ('HP', 'Incrementa la vitalidad en un 9/10/12/13/15%. Beneficia a todo tu equipo.', 9, 10, 12, 13, 15)
         , ('Skill Haste', 'Incrementa la velocidad de recarga de las habilidades en un 2/5/8/11/15%. Beneficia a todo tu equipo.', 2, 5, 8, 11, 15)
         , ('Skill Haste', 'Incrementa la velocidad de recarga de las habilidades en un 5/6/8/11/15%. Beneficia a todo tu equipo.', 5, 6, 8, 11, 15)
         , ('Skill Haste', 'Incrementa la velocidad de recarga de las habilidades en un 8/9/11/12/15%. Beneficia a todo tu equipo.', 8, 9, 11, 12, 15)
         , ('Skill Damage', 'Aumenta el daño causado por las habilidades en un 2/5/8/11/15%. Beneficia a tu equipo entero.', 2, 5, 8, 11, 15)
         , ('Skill Damage', 'Aumenta el daño causado por las habilidades en un 5/6/8/11/15%. Beneficia a tu equipo entero.', 5, 6, 8, 12, 15)
         , ('Skill Damage', 'Aumenta el daño causado por las habilidades en un 8/9/11/12/15%. Beneficia a tu equipo entero.', 8, 9, 11, 12, 15)
         , ('Recovery Potency', 'Aumenta la potencia de las habilidades de sanación en un 2/6/10/14/20%.', 2, 6, 10, 14, 20)
         , ('Recovery Potency', 'Aumenta la potencia de las habilidades de sanación en un 6/8/10/14/20%.', 6, 8, 10, 14, 20)
         , ('Recovery Potency', 'Aumenta la potencia de las habilidades de sanación en un 10/12/14/16/20%.', 10, 12, 14, 16, 20);


DROP TABLE IF EXISTS aventureros CASCADE;

CREATE TABLE aventureros
(
    id              bigserial       PRIMARY KEY
  , nombre          varchar(255)    NOT NULL
  , rareza          numeric(1)
  , elemento        varchar(255)
  , arma            varchar(255)
  , hab1_id         bigint          REFERENCES habilidades (id)
                                    ON DELETE NO ACTION
                                    ON UPDATE CASCADE
  , hab2_id         bigint          REFERENCES habilidades (id)
                                    ON DELETE NO ACTION
                                    ON UPDATE CASCADE
  , pas1_id         bigint          REFERENCES pasivas (id)
                                    ON DELETE NO ACTION
                                    ON UPDATE CASCADE
  , pas2_id         bigint          REFERENCES pasivas (id)
                                    ON DELETE NO ACTION
                                    ON UPDATE CASCADE
  , pas3_id         bigint          REFERENCES pasivas (id)
                                    ON DELETE NO ACTION
                                    ON UPDATE CASCADE
  , coab_id         bigint          REFERENCES cohabilidades (id)
                                    ON DELETE NO ACTION
                                    ON UPDATE CASCADE
  , backstory       varchar(1000)
  , vida_base       numeric(3)
  , vida_maxima     numeric(3)
  , vida4promocion  numeric(3)
  , vida5promocion  numeric(3)
  , vida40nodos     numeric(3)
  , vida45nodos     numeric(3)
  , vida50nodos     numeric(3)
  , fuerza_base     numeric(3)
  , fuerza_maxima   numeric(3)
  , fuerza4promocion    numeric(3)
  , fuerza5promoción    numeric(3)
  , fuerza40nodos   numeric(3)
  , fuerza45nodos   numeric(3)
  , fuerza50nodos   numeric(3)
  , imagen_entera   varchar(255)
  , imagen_minimizada   varchar(255)
);

INSERT INTO aventureros (nombre, rareza, elemento, arma, hab1_id, hab2_id, pas1_id, pas2_id, pas3_id, coab_id, backstory, vida_base, vida_maxima, vida4promocion, vida5promocion, vida40nodos, vida45nodos, vida50nodos, fuerza_base, fuerza_maxima, fuerza4promocion, fuerza5promoción, fuerza40nodos, fuerza45nodos, fuerza50nodos, imagen_entera, imagen_minimizada)
    VALUES ('Euden', 4,	'Fuego', 'Espada', 1, 2, 1, 2, 3, 2, 'El séptimo heredero de la familia real alberia, vive con el apoyo incondicional de su hermana gemela, Zethia y su hada, Notte. Siempre sonriente, le caracteriza una mezcla singular de valor inquebrantable e intensa consideración por los demás.', 68, 430, 0, 8, 234, 263, 287, 46, 288, 0, 6, 157, 176, 192, 'Euden.png', 'Eudenmini.png')
         , ('Elisanne', 4, 'Agua', 'Lanza', 3, 4, 4, 5, 6, 14, 'Caballera de la Iglesia de Ilia, y un prodigio cuyos logros le han dado el rango de Paladyn. Sin embargo, actualmente ha sido tachada de hereje y es constantemente perseguida. Aunque firme, en secreto persigue intereses más suaves.', 72, 451, 0, 9, 246, 276, 301, 44, 276, 0, 6, 150, 168, 184, 'Elisanne.png', 'Elisannemini.png')
         , ('Ranzal', 4, 'Viento', 'Hacha', 5, 6, 7, 8, 9, 11, 'Habilidoso mercenario cuya apariencia desaliñada y lengua sordaz pueden dar una mala primera impresión, pero siempre actúa con honor y convicción hasta el final. Ocasionalmente, parece que se deja llevar en los banquetes.', 66, 468, 0, 9, 255, 286, 313, 37, 265, 0, 5, 145, 163, 179, 'Ranzal.png', 'Ranzalmini.png')
         , ('Luca', 4, 'Luz', 'Arco', 7, 8, 10, 11, 12, 17, 'Un chico que ama su ciudad forestal de Woodhaven. No se da aires de grandeza por su honesta naturaleza, y es más propicio a tomar acción rápida que a deliberar. Su amor por las travesuras le encuentra normalmente con la furia de su hermana, que, sin embargo, tiene en alta estima.', 65, 460, 0, 10, 250, 281, 307, 37, 266, 0, 5, 145, 163, 179, 'Luca.png', 'Lucamini.png')
         , ('Cleo', 4, 'Oscuro', 'Baston', 9, 10, 13, 14, 15, 23, 'Mujer que defendió el Santuario durante muchos años mientras estuvo sellado en la niebla y siempre está en control de sus emociones. Ahora apoya al nuevo maestro del Santuario, Euden, y es conocida por sus intensas capacidades en economía doméstica.', 64, 456, 0, 9, 250, 281, 307, 37, 266, 0, 5, 145, 163, 180, 'Cleo.png', 'Cleomini.png')
         , ('Mikoto', 5, 'Fuego', 'Katana', 11, 12, 16, 2, 17, 6, 'Un guerrero cultivado a través de extensiva meditación, su fuerza mental le da la habilidad de hender la tierra. Se aunó bajo la condición de que fuera ayudado a encontrar a su gato desaparecido, a quien considera su verdadero amigo.', 62, 443, 0, 0, 243, 273, 297, 44, 311, 0, 0, 170, 191, 209, 'Mikoto.png', 'Mikotomini.png')
         , ('Xander', 5, 'Agua', 'Espada', 13, 14, 18, 2, 19, 3, 'Un descarado rey de otra tierra que apareció un día clamando el castillo como suyo propio. El aprecio que le muestra a sus súbditos ha llevado a algunos a aceptarle – pero nunca lo suficiente como para llamarle su Rey.', 64, 453, 0, 0, 247, 277, 304, 42, 301, 0, 0, 163, 183, 202, 'Xander.png', 'Xandermini.png')
         , ('Maribelle', 5, 'Viento', 'Varita', 15, 16, 20, 8, 21, 21, 'Vivaz chica del bosque cuya inocente alegría es un soplo de aire fresco en cualquier situación. Quiere que la tomen en serio y se enfada si la tratan como a una niña – pero cualquiera puede hacerse amigo de ella con un dulce o dos.', 63, 448, 0, 0, 243, 273, 300, 43, 306, 0, 0, 166, 186, 206, 'Maribelle.png', 'Maribellemini.png')
         , ('Hildegarde', 5, 'Luz', 'Baston', 17, 18, 21, 22, 23, 24, 'A pesar de ser la cabeza de una abadía, un oráculo la impulsó a ir a una misión al castillo a ayudar al príncipe. Su personalidad austera refuerza su fe y le ayuda a imponer los principios de la Iglesia en otros. Tiene un odio inusual contra las mentiras.', 68, 485, 0, 0, 263, 295, 325, 39, 278, 0, 0, 150, 168, 188, 'Hildegarde.png', 'Hildegardemini.png')
         , ('Nefaria', 5, 'Oscuro', 'Arco', 19, 20, 24, 25, 26, 18, 'Una bella mujer en ropajes extranjeros. Aunque joven, su habla y manerismos recuerdan a uno a los días de antaño. Se sabe poco de su pasado, pero su vasto conocimiento del maná le permitió reconocer enseguida el pacto de dragón del príncipe.', 68, 480, 0, 0, 263, 295, 321, 40, 283, 0, 0, 164, 173, 189, 'Nefaria.png', 'Nefariamini.png')
         , ('Renelle', 3, 'Fuego', 'Daga', 21, 22, 27, 11, 28, 7, 'Charlatana y confiada cazadora de tesoros que se enorgullece de su trabajo y tiene las habilidades en que basarse. Busca un compañero al que tratar como igual y que disfrute de la emoción de la caza tanto como ella.', 64, 454, 11, 9, 247, 277, 304, 38, 270, 6, 6, 146, 164, 182, 'Renelle.png', 'Renellemini.png')
         , ('Pietro', 3, 'Agua', 'Hacha', 23, 24, 29, 30, 31, 10, 'Un aventurero en busca de la fabulosa ciudad helada. Como se piensa que dicha ciudad solo existe en cuentos de hadas, es a menudo sujeto de burla. Algunos, sin embargo, encuentran inspiración en su perseverancia.', 62, 443, 11, 8, 243, 273, 298, 35, 251, 6, 5, 137, 154, 169, 'Pietro.png', 'Pietromini.png')
         , ('Melody', 3, 'Viento', 'Katana', 25, 26, 32, 33, 34, 4, 'Sirvienta aplicada en un eterno estado de entrenamiento debido a su naturaleza patosa. No existe manera de contar cuántos platos ha roto o cuántos delantales ha quemado. ¿Será capaz alguna vez de hacerse llamar una sirvienta de verdad?', 59, 421, 10, 8, 230, 258, 282, 37, 267, 6, 5, 145, 163, 179, 'Melody.png', 'Melodymini.png')
         , ('Malka', 3, 'Luz', 'Lanza', 27, 28, 35, 36, 12, 13, 'Un maestro artesano ataviado en armadura áurea. Hay quienes piensan que lo hace para jactarse de su riqueza, pero no es esa la razón. Su fervor por la armadura arde con más intensidad que ninguna forja, y su necesidad de salvar vidas es más férrea que el acero.', 60, 427, 10, 8, 234, 263, 287, 36, 260, 6, 5, 141, 158, 175, 'Malka.png', 'Malkamini.png')
         , ('Althemia', 3, 'Oscuro', 'Varita', 29, 30, 37, 38, 39, 19, 'Una joven que es tímida con gente nueva. Es capaz de hablar largo y tendido sobre su investigación, pero es de otro modo poco elocuente, y a menudo actúa de manera arrogante para ocultar su vergüenza. Aunque tiene pasión con su investigación, está falta de habilidades sociales.', 60, 423, 10, 9, 230, 258, 283, 37, 263, 7, 5, 142, 159, 177, 'Althemia.png', 'Althemiamini.png');

DROP TABLE IF EXISTS dragones CASCADE;

CREATE TABLE dragones
(
    id                  bigserial       PRIMARY KEY
  , nombre              varchar(255)    NOT NULL
  , elemento            varchar(255)
  , rareza              numeric(1)
  , backstory           varchar(1000)
  , hab_id              bigint          REFERENCES habilidades (id)
                                        ON DELETE NO ACTION
                                        ON UPDATE CASCADE
  , pas1_id             bigint          REFERENCES pasivas (id)
                                        ON DELETE NO ACTION
                                        ON UPDATE CASCADE
  , pas2_id             bigint          REFERENCES pasivas (id)
                                        ON DELETE NO ACTION
                                        ON UPDATE CASCADE
  , vida_base           numeric(3)
  , vida_maxima         numeric(3)
  , fuerza_base         numeric(3)
  , fuerza_maxima       numeric(3)
  , vida_base_pasiva    numeric(3,2)
  , fuerza_base_pasiva  numeric(3,2)
  , vida_maxima_pasiva  numeric(3,2)
  , fuerza_maxima_pasiva    numeric(3,2)
  , resistencia_elemental   varchar(255)
  , resistencia_base    numeric(3,2)
  , resistencia_maxima  numeric(3,2)
  , imagen_entera       varchar(255)
  , imagen_minimizada   varchar(255)
);

INSERT INTO dragones (nombre, elemento, rareza, backstory, hab_id, pas1_id, pas2_id, vida_base, vida_maxima, fuerza_base, fuerza_maxima, vida_base_pasiva, fuerza_base_pasiva, vida_maxima_pasiva, fuerza_maxima_pasiva, resistencia_elemental, resistencia_base, resistencia_maxima, imagen_entera, imagen_minimizada)
    VALUES ('Prometheus', 'Fuego', 5, 'Un  poderoso dragón que heredó la Llama Primigenia. Cree que los fuertes tienen el deber de proteger a los débiles, pero aun así su gran poder una vez hirió a aquellos que quería salvar. Desde entonces, ha mantenido la distancia con la humanidad.', 31, 40, null, 37, 374, 12, 121, 0, 0, 0.35, 0.5, 'Viento', 0.15, 0.15, 'Prometheus.png', 'Prometheusmini.png')
         , ('Leviathan', 'Agua', 5, 'Un dragón que ha dormido en las profundidades del océano desde tiempos inmemoriales. A pesar de que su nombre solo se susurre por creerle un señor de la calamidad, es un perfecto caballero que detesta su colosal poder y lo que representa.', 32, 41, null, 37, 370, 12, 125, 0, 0, 0.4, 0.6, 'Ninguno', 0, 0, 'Leviathan.png', 'Leviathanmini.png')
         , ('High Midgardsormr', 'Viento', 5, 'La forma del Wyrm del Viento Midgardsormr después de desatar su verdadero poder. Con el batir de sus alas, puede conjurar temerosos vendavales, arrasándolo todo a su paso. Usa su vasto conocimiento y poder para defender el reino fundado por su antigüo maestro.', 33, 42, 43, 35, 356, 11, 114, 0.2, 0.3, 0.2, 0.3, 'Ninguno', 0, 0, 'HighMidgardsormr.png', 'HighMidgardsormrmini.png')
         , ('Jeanne D''Arc', 'Luz', 5, 'Una caballera misericordiosa y eterna cuyas leyendas abundan, con la forma de una joven doncella. Se dice que aparece allá donde haya gente sufriendo―sea por gobiernos corruptos o por invasiones de monstruos―y los guía hasta la salvación.', 34, 44, null, 38, 384, 11, 113, 0.4, 0.6, 0, 0, 'Ninguno', 0, 0, 'JeanneDArc.png', 'JeanneDArcmini.png')
         , ('Marishiten', 'Oscuro', 5, 'Uno de los doce grandes dragones que sirven a Amaterasu. Belicosa y poseedora de fuerza prodigiosa, es adorada entre los guerreros como un icono de la victoria asegurada. En temas más agradables, tiene una serie de pequeños jabalíes que la siguen allá donde va.', 35, 44, null, 37, 374, 12, 121, 0, 0, 0.4, 0.6, 'Ninguno', 0, 0, 'Marishiten.png', 'Marishitenmini.png');
