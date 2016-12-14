CREATE TABLE category (
  id int(11) NOT NULL AUTO_INCREMENT,
  parent_id int(11) DEFAULT NULL,
  created_date timestamp NULL DEFAULT NULL,
  created_by varchar(15) DEFAULT NULL,
  last_updated_date timestamp NULL DEFAULT NULL,
  last_updated_by varchar(15) DEFAULT NULL,
  PRIMARY KEY (id)
);

CREATE TABLE category_lang (
  id int(11) NOT NULL AUTO_INCREMENT,
  category_id int(11) NOT NULL,
  language varchar(6) NOT NULL,
  name varchar(255) NOT NULL,
  created_date timestamp NULL DEFAULT NULL,
  created_by varchar(15) DEFAULT NULL,
  last_updated_date timestamp NULL DEFAULT NULL,
  last_updated_by varchar(15) DEFAULT NULL,
  PRIMARY KEY (id)
);

ALTER TABLE `category_lang`
ADD CONSTRAINT `category_lang_fk` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

CREATE TABLE product (
  id int(11) NOT NULL AUTO_INCREMENT,
  category_id int(11) NOT NULL,
  prod_cd varchar(255) NOT NULL,
  sub_img_count int(11) NOT NULL,
  is_active char(1) NOT NULL,
  created_date timestamp NULL DEFAULT NULL,
  created_by varchar(15),
  last_updated_date timestamp NULL DEFAULT NULL,
  last_updated_by varchar(15) DEFAULT NULL,
  PRIMARY KEY (id)
);

CREATE TABLE product_lang (
  id int(11) NOT NULL AUTO_INCREMENT,
  product_id int(11) NOT NULL,
  language varchar(6) NOT NULL,
  name varchar(255),
  description text,
  created_date timestamp NULL DEFAULT NULL,
  created_by varchar(15),
  last_updated_date timestamp NULL DEFAULT NULL,
  last_updated_by varchar(15) DEFAULT NULL,
  PRIMARY KEY (id)
);

ALTER TABLE `product_lang`
ADD CONSTRAINT `product_lang_fk` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
