<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Uniritter</title>
        <link href="" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        
        <?php
        require_once 'menu.php';
        require_once 'menu02.php';
        ?>
        
        <div id="banner"></div>
        <div id="menusec"></div>
        <div id="noticia"></div>
        <div id="noticia2">
            
        </div>
        
        <div id="noticia03">
            
        </div>
        <div id="outras"></div>
        <div id="link01">
            <label>Curso de Direito da UniRitter promove Sessão externa de Julgamento com o Tribunal<br> Regional do Trabalho da 4ª Região
            </label>          
        </div>
        <div id="link02">
            <label>Alunos de Design de Moda participam de processo seletivo no Sport Club Internacional<br><br>
            Liga Acadêmica de Pesquisa e Análises Biomédicas promove evento<br><br>
            Estudantes de Nutrição promovem oficina de Páscoa para a comunidade</label>
        </div>
        <div id="link03">
            <label>Aula Inaugural da Faculdade de Design da UniRitter acontece em 17/04 no Campus Zona<br> Sul<br><br>
            Alunos da UniRitter entregam doações do Trote Solidário
            </label>
        </div>
        <div id="link04">
            <label>VEJA TODAS AS NOTÍCIAS</label>
        </div>
        <div id="noticia04">
            
        </div>
        <div id="tabela"></div>
        <div id="tabela2"></div>
        <div id="tabela3"></div>
        <div id="evento">
            <button>VEJA TODOS OS EVENTOS </button>
        </div>
        <div id="campus"></div>     
        <div id="rodape">
            <table>
            <tr>
                <td>►Institucional<br><br>
                    O CENTRO UNIVERSITÁRIO<br><br>
                    AVALIAÇÃO INSTITUCIONAL<br><br>
                    EDUCAÇÃO A DISTÂNCIA<br><br>
                    EXTENSÃO E RESPONSABILIDADE SOCIAL<br><br>
                    NOSSOS CAMPI<br><br>
                    POLÍTICA DE PRIVACIDADE<br><br>
                    REDE LAUREATE<br><br>
                    REITORIA<br><br>
                </td>
                <td>►Formas de Ingresso<br><br>
                    VESTIBULAR<br><br>
                    PROVA AGENDADA<br><br>
                    TRANSFERÊNCIA<br><br>
                    ENEM<br><br>
                    SEGUNDA GRADUAÇÃO<br><br>
                    REINGRESSO<br><br>
                    PÓS-GRADUAÇÃO<br><br>
                    BOLSAS E FINANCIAMENTOS<br><br> 
                                       <br><br> 
                                       <br><br> 
                </td>
                <td>►Cursos<br><br>
                   GRADUAÇÃO PRESENCIAL<br><br>
                   GRADUAÇÃO SEMIPRESENCIAL<br><br>
                   PÓS-GRADUAÇÃO<br><br>
                   MESTRADO<br><br>
                   DOUTORADO<br><br>
                </td>
                <td>►Aluno<br><br>
                   REMATRÍCULA<br><br>
                   BOLSAS E FINANCIAMENTOS<br><br>
                   CALENDÁRIO ACADÊMICO<br><br>
                   DCE<br><br>
                   ENADE<br><br>
                   FORMATURAS<br><br>
                   NEGOCIAÇÃO DE DÉBITOS<br><br>
                   PORTAL DO ALUNO<br><br> 
                       <br><br>
                </td>
                <td>►International Office<br><br>
                    APRESENTAÇÃO<br><br>
                    EDITAIS<br><br>
                    INSTITUIÇÕES CONVENIADAS<br><br>
                       <br><br>
                       <br><br>
                       <br><br>
                </td>            
            </tr>
            </table>
        </div>
        
        
        <style>
            body{
                margin: 0px;
                padding: 0px;
            }
            #banner{ 
                width: 1900px; height: 390px; 
                background-image: url('imagens/bannerrrr.png'); 
                /*background-size: 100% 100%;*/  
                background-repeat: no-repeat ;   
                background-position: right bottom;     
            }
          
            #noticia{
                width: 637px; height: 55px; 
                margin: 15px 0px 0px 390px;
                background-image: url('imagens/UltimasNoticias.png');
                background-position: right bottom; 
            }
            
            #noticia2{
                width: 637px; height: 400px; 
                margin: 15px 0px 0px 390px;
                background-image: url('imagens/materia.png');
                background-position: right bottom;
                position: relative;
                float: left;
            }
            #noticia2:hover{
                top:-2px;box-shadow:0 4px 4px #666
            }
       
            
            
            #tabela{
                width: 408px; height: 70px; 
                background-image: url('imagens/tabela.png');
                background-position: right bottom; 
                margin: 5px 0px 0px 0px;
                margin-left: 1100px;
            }
            #tabela2{
                width: 408px; height: 70px; 
                background-image: url('imagens/tabela2.png');
                background-position: right bottom; 
                margin: 5px 0px 0px 0px;
                margin-left: 1100px;
            }
            #tabela3{
                width: 408px; height: 70px; 
                background-image: url('imagens/tabela3.png');
                background-position: right bottom; 
                margin: 5px 0px 0px 0px;
                margin-left: 1100px;
            }
            #evento{
                width: 408px; height: 600px; 
                background-image: url('imagens/eventosssss.png');
                background-position: right bottom; 
                margin: 40px 0px 0px 0px;
                margin-left: 1100px;
            }
            #evento button{
                margin: 542px 0px 0px 20px;               
                background-color: red;
                font-weight: 700;
                font-size: 17px;
                font-family: "Calibri";
                text-align: center;
                border: none;
                width: 90%; height: 48px;
                border-radius: 5px;
                color: white;
            }
            #evento button:hover{
                background-color: #FF4040;
                color:white;
            }
           
            #noticia03{
                background-image: url('imagens/noticiasss.png');
                background-repeat: no-repeat;
                width: 312px; height: 355px;
                background-position: right bottom;
                margin: 470px 0px 0px 385px;
                float: left;
                position: absolute;
            }
            
            #noticia03:hover{
                box-shadow:0 4px 4px #666
            }
            #outras{
                background-image: url('imagens/barra.png');
                background-repeat: no-repeat;
                width: 309px; height: 48px;
                background-position: right bottom;
                margin: 815px 0px 0px 387px;
                float: left;
                position: absolute;
            }
            
            #noticia04{
                background-image: url('imagens/noticiaaaaaa.png');
                background-repeat: no-repeat;
                width: 309px; height: 335px;
                background-position: right bottom;
                margin: 470px 0px 0px 720px;
                float: left;
                position: absolute;
            }
          
             #noticia04:hover{
                background-color: lightgrey;
                color:white;
            }
            
            #link01{
                background-image: url('imagens/link01.png');
                background-repeat: no-repeat;
                width: 638px; height: 147px;
                background-position: right bottom;
                margin: 862px 0px 0px 385px;
                float: left;
                position: absolute;
            }
            #link01 label{
                margin: 50px 0px 0px 23px;
                font-size: 14px;
                font-family: "Calibri";
                width: 200%; height: 32px;
                color: red; 
                position: absolute;
            }
            #link01 label:hover{
                text-decoration: underline;
                color: red;
                cursor: pointer;
            }
            #link02{
                background-image: url('imagens/link02.png');
                background-repeat: no-repeat;
                width: 639px; height: 148px;
                background-position: right bottom;
                margin: 1009px 0px 0px 385px;
                float: left;
                position: absolute;
            }
            #link02 label{
                margin: 50px 0px 0px 23px;
                font-size: 14px;
                font-family: "Calibri";
                width: 200%; height: 32px;
                color: red; 
                position: absolute;
            }
            #link02 label:hover{
                text-decoration: underline;
                color: red;
                cursor: pointer;
            }
            #link03{
                background-image: url('imagens/link03.png');
                background-repeat: no-repeat;
                width: 639px; height: 117px;
                background-position: right bottom;
                margin: 1156px 0px 0px 385px;
                float: left;
                position: absolute;
            }
            #link03 label{
                margin: 50px 0px 0px 23px;
                font-size: 14px;
                font-family: "Calibri";
                width: 200%; height: 32px;
                color: red; 
                position: absolute;
            }
            #link03 label:hover{
                text-decoration: underline;
                color: red;
                cursor: pointer;
            }
            #link04{
                background-image: url('imagens/link04.png');
                background-repeat: no-repeat;
                width: 639px; height: 51px;
                background-position: right bottom;
                margin: 1272px 0px 0px 385px;
                float: left;
                position: absolute;
            }
            #link04 label{
                margin: 20px 0px 0px 245px;
                font-size: 18px;
                font-family: "Calibri";
                font-weight: bold;
                width: 200%; height: 32px;
                color: red; 
                position: absolute;
            }
            #link04 label:hover{
                text-decoration: underline;
                cursor: pointer;
            }
            #campus{
             width: 637px; height: 55px; 
             margin: 15px 0px 0px 390px;
             background-image: url('imagens/campus.png');
             background-position: right bottom;       
            }
     
            #rodape{
                width: 100%; height: 700px;
                margin: 540px 0px 0px 0px;
                background-image: url('imagens/fundo.png'); 
                background-position: right bottom;
                position: absolute;
                padding-left: 300px;
            }
            #rodape table tr td{
                color: white;
                font-family: "Calibri";
                padding: 80px 0px 0px 80px;
                margin: 50px;
            }
            
        </style> 
    </body>
</html>
