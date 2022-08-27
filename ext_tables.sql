CREATE TABLE tx_rcgallery_domain_model_gallery (
	title varchar(255) NOT NULL DEFAULT '',
	recordin_day datetime DEFAULT NULL,
	description text NOT NULL DEFAULT '',
	images int(11) unsigned NOT NULL DEFAULT '0'
);

CREATE TABLE tx_rcgallery_domain_model_image (
	gallery int(11) unsigned DEFAULT '0' NOT NULL,
	file int(11) unsigned NOT NULL DEFAULT '0',
	caption varchar(255) NOT NULL DEFAULT ''
);
