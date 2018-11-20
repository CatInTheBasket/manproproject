{\rtf1\ansi\ansicpg1252\cocoartf1671\cocoasubrtf100
{\fonttbl\f0\fmodern\fcharset0 CourierNewPSMT;}
{\colortbl;\red255\green255\blue255;\red251\green0\blue7;\red255\green255\blue255;\red0\green0\blue0;
\red146\green26\blue32;\red15\green112\blue1;\red0\green0\blue194;}
{\*\expandedcolortbl;;\cssrgb\c100000\c0\c0;\cssrgb\c100000\c100000\c100000;\cssrgb\c0\c0\c0;
\cssrgb\c64706\c16471\c16471;\cssrgb\c0\c50196\c0;\cssrgb\c0\c0\c80392;}
\paperw11900\paperh16840\margl1440\margr1440\vieww10800\viewh14560\viewkind0
\deftab720
\pard\pardeftab720\partightenfactor0

\f0\fs32 \cf2 \cb3 \expnd0\expndtw0\kerning0
<?php\cf0 \cb1 \
\cb3 $servername = \cf5 "localhost"\cf0 ;\cb1 \
\cb3 $username = \cf5 "root"\cf0 ;\cb1 \
\cb3 $password = \cf5 ""\cf0 ;\cb1 \
\cb3 $dbname = \cf5 "ekskul garut"\cf0 ;\cb1 \
\
\cf6 \
\cf0 \cb3 $conn = \cf7 new\cf0  mysqli($servername, $username, $password, $dbname);\cb1 \
\cf6 \
\cf7 \cb3 if\cf0  ($conn->connect_error)\'a0\{\cb1 \
\cb3 \'a0\'a0\'a0 \cf7 die\cf0 (\cf5 "Connection failed: "\cf0  . $conn->connect_error);\cb1 \
\cb3 \}\cf2  \cf0 \cb1 \
\
\cb3 $sql = \cf5 "INSERT INTO pendaftaran (nama_ekskul, nama_siswa)\cb1 \
\cb3 VALUES ('OSIS', 'Atib')"\cf0 ;\cb1 \
\
\cf7 \cb3 if\cf0  ($conn->query($sql) === TRUE) \{\cb1 \
\cb3 \'a0\'a0\'a0 \cf7 echo\cf0  \cf5 "New record created successfully"\cf0 ;\cb1 \
\cb3 \} \cf7 else\cf0  \{\cb1 \
\cb3 \'a0\'a0\'a0 \cf7 echo\cf0  \cf5 "Error: "\cf0  . $sql . \cf5 "<br>"\cf0  . $conn->error;\cb1 \
\cb3 \}\cb1 \
\
\cb3 $conn->close();\cb1 \
\cf2 \cb3 ?>}