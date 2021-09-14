CREATE DATABASE chat;

USE chat;

CREATE TABLE users (
  user_id int(11) NOT NULL,
  unique_id int(200) NOT NULL,
  first_name varchar(255) NOT NULL,
  last_name varchar(255) NOT NULL,
  email varchar(255) NOT NULL,
  password varchar(255) NOT NULL,
  image varchar(400) NOT NULL,
  status varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


CREATE TABLE messages (
  msg_id int(11) NOT NULL,
  incoming_id int(255) NOT NULL,
  outgoing_id int(255) NOT NULL,
  message varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;




ALTER TABLE users
  ADD PRIMARY KEY (user_id);

ALTER TABLE messages
  ADD PRIMARY KEY (msg_id);

ALTER TABLE users
  MODIFY user_id int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE messages
  MODIFY msg_id int(11) NOT NULL AUTO_INCREMENT;
