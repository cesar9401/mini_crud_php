use equipment_management;

insert into employees (name, cui, birthdate, gender, phone_number, email, department, created_at) values ('Natalee Wabb', '4274009277013', '1991-07-27', 'F', '07259948', 'nwabb0@wikia.com', 'Ventas', '2019-09-24');
insert into employees (name, cui, birthdate, gender, phone_number, email, department, created_at) values ('Mord Attwool', '5056465779109', '1994-08-13', 'M', '72233261', 'mattwool1@canalblog.com', 'Ventas', '2015-09-25');
insert into employees (name, cui, birthdate, gender, phone_number, email, department, created_at) values ('Giustina Rawcliffe', '4955742202024', '2001-09-05', 'M', '81418344', 'grawcliffe2@amazon.co.uk', 'Finanzas', '2017-06-10');
insert into employees (name, cui, birthdate, gender, phone_number, email, department, created_at) values ('Gavin Wards', '5034245133587', '1996-03-17', 'F', '86843316', 'gwards3@furl.net', 'Ventas', '2017-03-11');
insert into employees (name, cui, birthdate, gender, phone_number, email, department, created_at) values ('Germaine Shatford', '8236325163256', '1996-05-29', 'M', '32452386', 'gshatford4@is.gd', 'Finanzas', '2016-09-06');
insert into employees (name, cui, birthdate, gender, phone_number, email, department, created_at) values ('Nance Scotland', '0434690219140', '2000-08-04', 'M', '53835818', 'nscotland5@jalbum.net', 'Finanzas', '2018-07-02');
insert into employees (name, cui, birthdate, gender, phone_number, email, department, created_at) values ('Annie Hospital', '8181619401574', '2002-08-24', 'M', '29535310', 'ahospital6@sciencedaily.com', 'Recursos Humanos', '2016-08-23');
insert into employees (name, cui, birthdate, gender, phone_number, email, department, created_at) values ('Cilka Schofield', '0492014662347', '1993-09-11', 'F', '36958116', 'cschofield7@fc2.com', 'Ventas', '2019-02-03');
insert into employees (name, cui, birthdate, gender, phone_number, email, department, created_at) values ('Ruthanne McCulloch', '3419704079217', '1993-01-11', 'M', '75928776', 'rmcculloch8@canalblog.com', 'Finanzas', '2020-04-07');
insert into employees (name, cui, birthdate, gender, phone_number, email, department, created_at) values ('Elianore McBrier', '4241835358020', '1993-01-06', 'M', '51359283', 'emcbrier9@cisco.com', 'Recursos Humanos', '2018-04-04');

insert into users (username, password, employee_id) values ('rsqueers0', 'MGzsuwvUBV', 2);
insert into users (username, password, employee_id) values ('nfarguhar1', 'drMcKCiae1N', 7);
insert into users (username, password, employee_id) values ('ebuckerfield2', 'f2ILSW89', 5);
insert into users (username, password, employee_id) values ('hcleeve3', 'KWM0iLuSSJgV', 3);
insert into users (username, password, employee_id) values ('vdouris4', 'ECT1PyN', 6);

insert into equipment (name, valuation, comercial_brand, created_at, description, observation, available) values ('Monitor', 6061.79, 'ChemoCentryx, Inc.', '2020-09-08', 'et ultrices posuere cubilia curae duis faucibus accumsan odio curabitur convallis', 'tempus sit amet sem fusce consequat nulla nisl nunc nisl duis bibendum felis sed interdum venenatis turpis enim blandit mi in porttitor pede justo eu massa donec dapibus duis at', false);
insert into equipment (name, valuation, comercial_brand, created_at, description, observation, available) values ('Silla', 9413.29, 'Littelfuse, Inc.', '2017-01-22', 'vehicula condimentum curabitur in libero ut massa volutpat convallis morbi odio odio elementum eu interdum eu tincidunt in leo maecenas pulvinar lobortis est phasellus sit amet erat nulla', 'vel accumsan tellus nisi eu orci mauris lacinia sapien quis libero nullam sit amet turpis elementum ligula vehicula consequat morbi a ipsum integer a nibh', false);
insert into equipment (name, valuation, comercial_brand, created_at, description, observation, available) values ('Silla', 1810.18, 'Salem Media Group, Inc.', '2019-10-19', 'mi integer ac neque duis bibendum morbi non quam nec dui luctus rutrum nulla tellus in sagittis dui vel nisl duis ac nibh', 'nulla sed vel enim sit amet nunc viverra dapibus nulla suscipit ligula in lacus curabitur at ipsum ac', true);
insert into equipment (name, valuation, comercial_brand, created_at, description, observation, available) values ('Engrapadora', 9987.53, 'Eaton Vance Tax-Managed Buy-Write Income Fund', '2018-02-25', 'eleifend quam a odio in hac habitasse platea dictumst maecenas ut massa quis augue luctus tincidunt nulla', 'ut dolor morbi vel lectus in quam fringilla rhoncus mauris enim leo rhoncus', true);
insert into equipment (name, valuation, comercial_brand, created_at, description, observation, available) values ('Escritorio', 5830.0, 'My Size, Inc.', '2006-04-19', 'justo aliquam quis turpis eget elit sodales scelerisque mauris sit amet eros suspendisse accumsan tortor quis turpis sed', 'non mattis pulvinar nulla pede ullamcorper augue a suscipit nulla elit ac nulla sed vel enim sit amet nunc viverra dapibus nulla suscipit ligula in lacus', true);
insert into equipment (name, valuation, comercial_brand, created_at, description, observation, available) values ('Escritorio', 8541.4, 'Liberty Media Corporation', '2015-02-05', 'rutrum nulla tellus in sagittis dui vel nisl duis ac', 'id turpis integer aliquet massa id lobortis convallis tortor risus dapibus augue vel accumsan tellus nisi eu orci mauris lacinia sapien', true);
insert into equipment (name, valuation, comercial_brand, created_at, description, observation, available) values ('Teclado', 3828.89, 'Brocade Communications Systems, Inc.', '2014-09-29', 'quis lectus suspendisse potenti in eleifend quam a odio in hac habitasse platea dictumst maecenas ut massa quis augue luctus tincidunt nulla mollis molestie lorem', 'curae duis faucibus accumsan odio curabitur convallis duis consequat dui nec nisi volutpat eleifend donec', false);
insert into equipment (name, valuation, comercial_brand, created_at, description, observation, available) values ('Escritorio', 5889.38, 'RXi Pharmaceuticals Corporation', '2013-07-10', 'nisl ut volutpat sapien arcu sed augue aliquam erat volutpat in congue etiam justo etiam pretium iaculis justo in hac habitasse platea dictumst etiam faucibus cursus urna ut', 'risus dapibus augue vel accumsan tellus nisi eu orci mauris lacinia sapien', false);
insert into equipment (name, valuation, comercial_brand, created_at, description, observation, available) values ('Engrapadora', 1447.32, 'Novanta Inc.', '2020-05-16', 'in congue etiam justo etiam pretium iaculis justo in hac habitasse platea dictumst etiam faucibus cursus urna ut tellus nulla', 'luctus rutrum nulla tellus in sagittis dui vel nisl duis ac nibh fusce lacus purus aliquet at feugiat non pretium', true);
insert into equipment (name, valuation, comercial_brand, created_at, description, observation, available) values ('Computadora', 6316.5, 'Howard Hughes Corporation (The)', '2011-09-09', 'dolor quis odio consequat varius integer ac leo pellentesque ultrices mattis odio', 'in leo maecenas pulvinar lobortis est phasellus sit amet erat nulla tempus vivamus', true);
insert into equipment (name, valuation, comercial_brand, created_at, description, observation, available) values ('Mouse', 340.72, 'Gulf Island Fabrication, Inc.', '2009-01-23', 'dolor sit amet consectetuer adipiscing elit proin risus praesent lectus vestibulum quam sapien varius', 'malesuada in imperdiet et commodo vulputate justo in blandit ultrices enim lorem ipsum dolor sit amet consectetuer adipiscing elit proin interdum mauris non ligula pellentesque ultrices phasellus id sapien in', false);
insert into equipment (name, valuation, comercial_brand, created_at, description, observation, available) values ('Engrapadora', 2761.98, 'Selective Insurance Group, Inc.', '2012-07-15', 'est phasellus sit amet erat nulla tempus vivamus in felis eu sapien cursus vestibulum proin eu mi nulla', 'ullamcorper augue a suscipit nulla elit ac nulla sed vel enim sit amet nunc viverra dapibus nulla suscipit ligula in', false);
insert into equipment (name, valuation, comercial_brand, created_at, description, observation, available) values ('Engrapadora', 9196.78, 'Freeport-McMoran, Inc.', '2010-10-02', 'ut odio cras mi pede malesuada in imperdiet et commodo', 'id justo sit amet sapien dignissim vestibulum vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae nulla dapibus dolor vel est donec odio justo sollicitudin', false);
insert into equipment (name, valuation, comercial_brand, created_at, description, observation, available) values ('Monitor', 138.71, 'RGC Resources Inc.', '2016-10-08', 'ligula pellentesque ultrices phasellus id sapien in sapien iaculis congue vivamus metus arcu adipiscing molestie hendrerit at vulputate vitae', 'ut erat id mauris vulputate elementum nullam varius nulla facilisi cras non velit nec nisi vulputate nonummy', true);
insert into equipment (name, valuation, comercial_brand, created_at, description, observation, available) values ('Escritorio', 855.61, 'AllianzGI Diversified Income & Convertible Fund', '2011-02-10', 'rutrum nulla tellus in sagittis dui vel nisl duis ac nibh fusce lacus purus aliquet at feugiat non pretium quis lectus suspendisse potenti in eleifend quam a', 'adipiscing lorem vitae mattis nibh ligula nec sem duis aliquam convallis nunc proin at turpis a pede posuere nonummy integer non velit', false);
insert into equipment (name, valuation, comercial_brand, created_at, description, observation, available) values ('Computadora', 2417.0, 'Diana Shipping inc.', '2016-10-22', 'accumsan tellus nisi eu orci mauris lacinia sapien quis libero nullam sit', 'sem duis aliquam convallis nunc proin at turpis a pede posuere', false);
insert into equipment (name, valuation, comercial_brand, created_at, description, observation, available) values ('Engrapadora', 4468.67, 'Versartis, Inc.', '2008-05-22', 'faucibus orci luctus et ultrices posuere cubilia curae donec pharetra magna vestibulum aliquet ultrices erat tortor sollicitudin mi', 'consequat ut nulla sed accumsan felis ut at dolor quis odio consequat', true);
insert into equipment (name, valuation, comercial_brand, created_at, description, observation, available) values ('Computadora', 1157.27, 'Rogers Corporation', '2006-09-06', 'facilisi cras non velit nec nisi vulputate nonummy maecenas tincidunt lacus at velit vivamus vel nulla eget eros elementum', 'cras in purus eu magna vulputate luctus cum sociis natoque penatibus et magnis dis parturient montes nascetur ridiculus mus vivamus vestibulum sagittis sapien cum sociis natoque penatibus', true);
insert into equipment (name, valuation, comercial_brand, created_at, description, observation, available) values ('Escritorio', 7330.69, 'Nuveen AMT-Free Municipal Value Fund', '2012-02-26', 'suscipit ligula in lacus curabitur at ipsum ac tellus semper interdum mauris', 'tempor convallis nulla neque libero convallis eget eleifend luctus ultricies eu nibh quisque id justo sit amet sapien dignissim vestibulum vestibulum ante ipsum primis in faucibus', true);
insert into equipment (name, valuation, comercial_brand, created_at, description, observation, available) values ('Monitor', 7641.62, 'Integra LifeSciences Holdings Corporation', '2009-04-13', 'ut blandit non interdum in ante vestibulum ante ipsum primis in faucibus orci luctus et ultrices', 'cras mi pede malesuada in imperdiet et commodo vulputate justo in blandit ultrices enim lorem ipsum', false);