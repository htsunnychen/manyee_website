INSERT INTO `category` (`id`, `parent_id`, `created_date`, `created_by`, `last_updated_date`, `last_updated_by`) VALUES 
(1, NULL, current_timestamp, NULL, current_timestamp, NULL), 
(2, NULL, current_timestamp, NULL, current_timestamp, NULL),
(3, 1, current_timestamp, NULL, current_timestamp, NULL),
(4, 1, current_timestamp, NULL, current_timestamp, NULL),
(5, 1, current_timestamp, NULL, current_timestamp, NULL),
(6, 1, current_timestamp, NULL, current_timestamp, NULL),
(7, 1, current_timestamp, NULL, current_timestamp, NULL),
(8, 1, current_timestamp, NULL, current_timestamp, NULL),
(9, 2, current_timestamp, NULL, current_timestamp, NULL),
(10, 2, current_timestamp, NULL, current_timestamp, NULL),
(11, 2, current_timestamp, NULL, current_timestamp, NULL),
(12, 2, current_timestamp, NULL, current_timestamp, NULL),
(13, 2, current_timestamp, NULL, current_timestamp, NULL),
(14, 2, current_timestamp, NULL, current_timestamp, NULL);

ALTER TABLE `category` AUTO_INCREMENT=15;

INSERT INTO category_lang (id, category_id, language, name, `created_date`, `created_by`, `last_updated_date`, `last_updated_by`) VALUES
(default, 1, 'zh-HK', '華麗金飾', current_timestamp, NULL, current_timestamp, NULL),
(default, 2, 'zh-HK', '閃耀鑽飾', current_timestamp, NULL, current_timestamp, NULL);

INSERT INTO category_lang (id, category_id, language, name, `created_date`, `created_by`, `last_updated_date`, `last_updated_by`) VALUES
(default, 3, 'zh-HK', '龍鳳手鐲', current_timestamp, NULL, current_timestamp, NULL),
(default, 4, 'zh-HK', '戒指', current_timestamp, NULL, current_timestamp, NULL),
(default, 5, 'zh-HK', '吊墜', current_timestamp, NULL, current_timestamp, NULL),
(default, 6, 'zh-HK', '項鍊', current_timestamp, NULL, current_timestamp, NULL),
(default, 7, 'zh-HK', '耳環', current_timestamp, NULL, current_timestamp, NULL),
(default, 8, 'zh-HK', '手鍊', current_timestamp, NULL, current_timestamp, NULL),
(default, 9, 'zh-HK', '戒指', current_timestamp, NULL, current_timestamp, NULL),
(default, 10, 'zh-HK', '訂婚戒指', current_timestamp, NULL, current_timestamp, NULL),
(default, 11, 'zh-HK', '結婚套戒', current_timestamp, NULL, current_timestamp, NULL),
(default, 12, 'zh-HK', '項鍊及吊墜', current_timestamp, NULL, current_timestamp, NULL),
(default, 13, 'zh-HK', '耳環', current_timestamp, NULL, current_timestamp, NULL),
(default, 14, 'zh-HK', '手鐲及手鍊<', current_timestamp, NULL, current_timestamp, NULL);

INSERT INTO category_lang (id, category_id, language, name, `created_date`, `created_by`, `last_updated_date`, `last_updated_by`) VALUES
(default, 1, 'zh-CN', '华丽金饰', current_timestamp, NULL, current_timestamp, NULL),
(default, 2, 'zh-CN', '闪耀钻饰', current_timestamp, NULL, current_timestamp, NULL);

INSERT INTO category_lang (id, category_id, language, name, `created_date`, `created_by`, `last_updated_date`, `last_updated_by`) VALUES
(default, 3, 'zh-CN', '龙凤手镯', current_timestamp, NULL, current_timestamp, NULL),
(default, 4, 'zh-CN', '戒指', current_timestamp, NULL, current_timestamp, NULL),
(default, 5, 'zh-CN', '吊坠', current_timestamp, NULL, current_timestamp, NULL),
(default, 6, 'zh-CN', '项链', current_timestamp, NULL, current_timestamp, NULL),
(default, 7, 'zh-CN', '耳环', current_timestamp, NULL, current_timestamp, NULL),
(default, 8, 'zh-CN', '手链', current_timestamp, NULL, current_timestamp, NULL),
(default, 9, 'zh-CN', '戒指', current_timestamp, NULL, current_timestamp, NULL),
(default, 10, 'zh-CN', '订婚戒指', current_timestamp, NULL, current_timestamp, NULL),
(default, 11, 'zh-CN', '结婚套戒', current_timestamp, NULL, current_timestamp, NULL),
(default, 12, 'zh-CN', '项链及吊坠', current_timestamp, NULL, current_timestamp, NULL),
(default, 13, 'zh-CN', '耳环', current_timestamp, NULL, current_timestamp, NULL),
(default, 14, 'zh-CN', '手镯及手链<', current_timestamp, NULL, current_timestamp, NULL);

INSERT INTO `product` (`id`, `category_id`, `prod_cd`, `sub_img_count`, `is_active`, `created_date`, `created_by`, `last_updated_date`, `last_updated_by`) VALUES
(1, 1, 'DRS588', 3, 'Y', NULL, NULL, NULL, NULL),
(2, 1, 'DRS589', 0, 'Y', NULL, NULL, NULL, NULL),
(3, 1, 'DRS590', 0, 'Y', NULL, NULL, NULL, NULL),
(4, 1, 'DRS591', 0, 'Y', NULL, NULL, NULL, NULL),
(5, 1, 'DRS592', 0, 'Y', NULL, NULL, NULL, NULL),
(6, 1, 'DRS593', 0, 'Y', NULL, NULL, NULL, NULL),
(7, 1, 'DRS594', 0, 'Y', NULL, NULL, NULL, NULL);

ALTER TABLE `product` AUTO_INCREMENT=8;

INSERT INTO `product_lang` (`product_id`, `language`, `name`, `description`, `created_date`, `created_by`, `last_updated_date`, `last_updated_by`) VALUES
(1, 'en-US', 'Testing Product', 'I am description.', NULL, NULL, NULL, NULL),
(1, 'zh-HK', '測試產品', '我是描述', NULL, NULL, NULL, NULL),
(1, 'zh-CN', '测试产品', '我是描述', NULL, NULL, NULL, NULL);
