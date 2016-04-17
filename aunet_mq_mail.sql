use aunet;
CREATE TABLE IF NOT EXISTS `aunet_mq_mail` (
  `id` text NOT NULL,
  `receiver_name` text,
  `receiver_mail` text,
  `subject` text,
  `content` text NOT NULL,
  `createtime` datetime DEFAULT CURRENT_TIMESTAMP,
  `state` int(4) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;