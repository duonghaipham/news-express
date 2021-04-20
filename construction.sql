CREATE DATABASE NEWS;

CREATE TABLE USER_(
    USERNAME VARCHAR(100),
    PASSWORD VARCHAR(100),
    NAME VARCHAR(100) CHARSET UTF8,
    PHONE CHAR(10),
    EMAIL VARCHAR(100),
    REGISTERED_TS DATETIME,
    BIRTHDAY DATE,
    GENDER BOOLEAN,
    ACTIVE BOOLEAN,
    PRIMARY KEY (USERNAME)
);

CREATE TABLE FEED(
    ID_FEED INT AUTO_INCREMENT,
    TITLE TINYTEXT CHARSET UTF8,
    SUMMARY VARCHAR(100) CHARSET UTF8,
    CONTENT MEDIUMTEXT CHARSET UTF8,
    URL_FIGURE VARCHAR(1000),
    USERNAME VARCHAR(100),
    PUBLISHED_TS DATETIME,
    VIEWED_COUNT INT,
    HIDE BOOLEAN,
    PRIMARY KEY (ID_FEED)
);

ALTER TABLE FEED
ADD CONSTRAINT FK_POSTED_USER
FOREIGN KEY (USERNAME) REFERENCES USER_ (USERNAME);

CREATE TABLE COMMENT(
    ID_COMMENT INT AUTO_INCREMENT,
    ID_FEED INT,
    USERNAME VARCHAR(100),
    CONTENT MEDIUMTEXT CHARSET UTF8,
    COMMENT_TS DATETIME,
    PRIMARY KEY (ID_COMMENT)
);

ALTER TABLE COMMENT
ADD CONSTRAINT FK_COMMENTED_USER
FOREIGN KEY (USERNAME) REFERENCES USER_(USERNAME);

ALTER TABLE COMMENT
ADD CONSTRAINT FK_COMMENTED_POST
FOREIGN KEY (ID_FEED) REFERENCES FEED (ID_FEED);

--INSERT SECTION
INSERT INTO USER_
VALUES ('admin', 'admin', 'admin', NULL, NULL, NOW(), NULL, NULL, NULL);
INSERT INTO FEED (title, content, url_figure, username, published_ts)
VALUEs ('Tiêu đề tin', 'Nội dung tin', '123456.jpg', 'admin', NOW());