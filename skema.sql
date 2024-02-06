

CREATE VIEW vw_posting AS SELECT
tbPosting.id_posting,
tbPosting.id_user,
tbUser.id_login,
tbUser.nama_user,
tbPosting.judul_posting,
tbPosting.tanggal_posting
FROM posting tbPosting
INNER JOIN tbl_user tbUser ON
tbUser.id_user = tbPosting.id_user

CREATE VIEW vw_chat AS SELECT
tbChat.id_chat,
tbUser.id_user,
tbUser.nama_user,
tbChat.judul_chat,
tbChat.tanggal_chat
FROM tbl_chat tbChat
INNER JOIN tbl_user tbUser ON
tbUser.id_user = tbChat.id_user

