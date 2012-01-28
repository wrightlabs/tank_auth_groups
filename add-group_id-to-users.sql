--
-- Add group_id to users table with default value of 300
--

ALTER TABLE users ADD group_id INT NOT NULL DEFAULT '300'