CREATE DATABASE ESTAGIO;
DROP TABLE funcionario;
CREATE TABLE Funcionario(
id SMALLINT AUTO_INCREMENT,
nome VARCHAR(100),
CPF VARCHAR(11),
cargo VARCHAR(100),
email VARCHAR(100),
senha VARCHAR(20),
PRIMARY KEY (id, CPF)
);




drop TABLE bloco3;
CREATE TABLE bloco1(
A_1_1_ INT,
A_1_2_ INT,
total_A_1_ INT,

A_2_1_ INT,
A_2_2_ INT,
total_A_2_ INT,

A_3_1_1_ INT,
A_3_1_2_ INT,
total_A_3_1_ INT,

A_3_2_1_ INT,
A_3_2_2_ INT,
total_A_3_2_ INT,

A_3_3_1_ INT,
A_3_3_2_ INT,
total_A_3_3_ INT,

A_3_4_outros VARCHAR(500),
A_3_4_1_ INT,
A_3_4_2_ INT,
total_A_3_4_ INT,
total_A_3_ INT,

A_4_1_ INT,
A_4_2_ INT,
total_A_4_ INT,

B_1_ INT,
B_2_ INT,
B_3_ INT,
B_4_ INT,


B_5_1_1_ INT,
B_5_1_2_ INT,
total_B_5_1_ INT,

B_5_2_1_ INT,
B_5_2_2_ INT,
total_B_5_2_ INT,
total_B_5_ INT,

B_6_ INT,

B_7_1_1_ INT,
B_7_1_2_ INT,
total_B_7_1_ INT,

B_7_2_1_ INT,
B_7_2_2_ INT,
total_B_7_2_ INT,
total_B_7_ INT,

B_8_ INT,

B_9_1_1_ INT,
B_9_1_2_ INT,
total_B_9_1_ INT,

B_9_2_1_ INT,
B_9_2_2_ INT,
total_B_9_2_ INT,
total_B_9_ INT
);

/*INSERT INTO bloco1(A_1_1_, A_1_2_,  A_2_1_, A_2_2_ , A_3_1_1_, A_3_1_2,  A_3_2_1_, A_3_2_2_, A_3_3_1_, A_3_3_2_, A_3_4_outros, A_3_4_1_, A_3_4_2_, 
A_4_1_, A_4_2_, B_1_, B_2_, B_3_, B_4_, B_5_1_1_, B_5_1_2_, B_5_2_1_, B_5_2_2_, B_6_, B_7_1_1_, B_7_1_2_, B_7_2_1_, B_7_2_2_,  B_8_, B_9_1_1_, B_9_1_2_, 
 B_9_2_1_, B_9_2_2_) VALUES 
 ('$A_1_1_', '$A_1_2_', '$A_2_1_', '$A_2_2_','$A_3_1_1_', '$A_3_1_2_','$A_3_2_1_', '$A_3_2_2_','$A_3_3_1_', '$A_3_3_2_','$A_3_4_outros', '$A_3_4_1_',
 '$A_3_4_2_', '$A_4_1_', '$A_4_2_', '$B_1_', '$B_2_', '$B_3_', '$B_4_', '$B_5_1_1_','$B_5_1_2_','$B_5_2_1_', '$B_5_2_2_', '$B_6_', '$B_7_1_1_', '$B_7_1_2_', 
 '$B_7_2_1_', '$B_7_2_2_','$B_8_','$B_9_1_1_', '$B_9_1_2_', '$B_9_2_1_', '$B_9_2_2_');

*/

CREATE TABLE bloco2(
C_1_ VARCHAR(5),
C_2_1_1_ VARCHAR(5),
C_2_1_2_ VARCHAR(5),
total_C_2_1_ VARCHAR(5),
C_2_2_1_ VARCHAR(5),
C_2_2_2_ VARCHAR(5),
total_C_2_2_ VARCHAR(5),
total_C_2_ VARCHAR(5),

C_3_1_ VARCHAR(5),
C_3_2_ VARCHAR(5),
C_3_3_ VARCHAR(5),
total_C_3_ VARCHAR(5),


C_4_1_ VARCHAR(5),
C_4_2_ VARCHAR(5),
total_C_4_ VARCHAR(5),

C_5_1_1_ VARCHAR(5),
C_5_1_2_ VARCHAR(5),
C_5_2_ VARCHAR(5),
C_5_3_ VARCHAR(5),
C_5_4_ VARCHAR(5),
C_5_5_ VARCHAR(5),
total_C_5_ VARCHAR(5),




C_6_3_1_ VARCHAR(5),
C_6_3_2_ VARCHAR(5),
C_6_3_3_outros VARCHAR(500),
C_6_3_3_ VARCHAR(5),
total_C_6_3_ VARCHAR(5),



total_C_6_ VARCHAR(5),
total_C_6_1_ VARCHAR(5),
total_C_6_2_ VARCHAR(5),
total_C_6_4_ VARCHAR(5),
total_C_6_3_e_total_C_6_4_ VARCHAR(5),

C_7_ VARCHAR(5),
C_7_1_1_ VARCHAR(5),
C_7_1_2_ VARCHAR(5),
total_C_7_1_ VARCHAR(5),


C_7_2_1_ VARCHAR(5),
C_7_2_2_ VARCHAR(5),
total_C_7_2_ VARCHAR(5),


C_7_3_1_ VARCHAR(5),
C_7_3_2_ VARCHAR(5),
total_C_7_3_ VARCHAR(5),


C_7_4_1_ VARCHAR(5),
C_7_4_2_ VARCHAR(5),
total_C_7_4_ VARCHAR(5),

C_7_5_1_ VARCHAR(5),
C_7_5_2_ VARCHAR(5),
total_C_7_5_ VARCHAR(5),


C_7_6_1_ VARCHAR(5),
C_7_6_2_ VARCHAR(5),
total_C_7_6_ VARCHAR(5),


C_7_7_outros VARCHAR(500),
C_7_7_1_ VARCHAR(5),
C_7_7_2_ VARCHAR(5),
total_C_7_7_ VARCHAR(5),

D_1_1_ VARCHAR(5),
D_1_2_ VARCHAR(5),
total_D_1_ VARCHAR(5),

D_2_1_ VARCHAR(5),
D_2_2_ VARCHAR(5),
total_D_2_ VARCHAR(5),


D_3_1_ VARCHAR(5),
D_3_2_ VARCHAR(5),
total_D_3_ VARCHAR(5),


D_4_1_ VARCHAR(5),
D_4_2_ VARCHAR(5),
total_D_4_ VARCHAR(5),


D_5_1_ VARCHAR(5),
D_5_2_ VARCHAR(5),
total_D_5_ VARCHAR(5),

D_6_1_ VARCHAR(5),
D_6_2_ VARCHAR(5),
total_D_6_ VARCHAR(5),


D_7_1_ VARCHAR(5),
D_7_2_ VARCHAR(5),
total_D_7_ VARCHAR(5),


total_D_8_1_ VARCHAR(5),
total_D_8_2_ VARCHAR(5),
D_8_3_outros VARCHAR(500),
total_D_8_3_ VARCHAR(5),
total_D_8_ VARCHAR(5),


D_9_outros VARCHAR(500),
total_D_9_ VARCHAR(5)
);




CREATE TABLE bloco3(
E_1_ VARCHAR(5),
E_2_ VARCHAR(5),

E_3_outros VARCHAR(500),

E_4_ VARCHAR(5),
E_5_ VARCHAR(5),
E_6_ VARCHAR(5),
E_7_ VARCHAR(5),
E_8_ VARCHAR(5),
E_9_ VARCHAR(500),
E_10_ VARCHAR(5),
E_11_ VARCHAR(5)

);
CREATE TABLE bairro(
bairro VARCHAR(100)
);