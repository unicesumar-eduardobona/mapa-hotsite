<?php

$perguntas = include 'perguntas.php';
// testando recebimento de perguntas
// var_dump($perguntas);

?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <title>Petrobras - Estudo de Caso</title>

        <!-- Bootstrap core CSS -->
        <link href="dist/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <style>
            body{
                background-color: #53b8b1
            }
            .perguntas{
                padding-top: 50px;
                padding-bottom: 30px;
            }
                .perguntas.cinza{
                    background-color: #8DA4B1
                }
                .perguntas.azul{
                    background-color: #1C496D
                }
                .perguntas-verde{
                    background-color: #53B8B1
                }
            
            .perguntas h5{
                color: #F6CE56;
                margin-bottom: 50px;
            }
            .perguntas p{
                color: #ffffff
            }
            
        </style>
        
        <script type="text/javascript" src="dist/jquery/jquery.min.js"></script>
        <script type="text/javascript" src="dist/bootstrap/js/bootstrap.min.js"></script>
    </head>

    <body>
        <div class="container-fluid">
            <div class="topo row">
                <img width="1280" height="490" src="dist/hotsite/images/header.jpg" style="width: 100%; height: auto" />
            </div>
        </div>
        
        <!-- pergunta 1 -->
        <div class="container">
            <div class="row perguntas">
                <div class="col-sm-1">
                    <img src="dist/hotsite/images/icone_1.png" />
                </div>
                <div class="col-sm-7">
                    <h5>Como é feita a composição do preço da gasolina ao consumidor?</h5>
                    <p>O valor pago pelo consumidor final não está sob gestão da Petrobras e é composto por 4 fatores: 1) Preços do produtor ou importador de gasolina “A” 2) Carga tributária 3) Custo do etanol obrigatório 4) Margens da distribuição e revenda.</p>
                    <p>Nossa parte é a primeira, referente ao preço do combustível em nossas refinarias, e corresponde cerca de 1/3 do preço final da gasolina.</p>
                    <p>A carga tributária responde por parte relevante do preço final. Além disto, os demais agentes da cadeia de comercialização, como importadores, distribuidores, revendedores e produtores de biocombustíveis, também influenciam na formação do preço final.</p>
                    <p>Período da coleta de 01/07/2018 a 07/07/2018. 
                    Cálculo baseado nos preços médios da Petrobras (gasolina A) e nos preços médios ao consumidor final (gasolina C) em 13 capitais e regiões metropolitanas brasileiras.</p>
                </div>
                <div class="col-sm-4">
                    <img src="dist/hotsite/images/imagem_1.png" />
                </div>
            </div>
        </div><!-- container -->
        
        <!-- pergunta 2 -->
        <div class="container-fluid perguntas cinza">
            <div class="container">
                <div class="row">
                    <div class="col-sm-1">
                        <img src="dist/hotsite/images/icone_2.png" />
                    </div>
                    <div class="col-sm-7">
                        <h5>A Petrobras controla o preço nos postos?</h5>
                        <p>Não. Os preços são livres nos postos e somos apenas um dos agentes na produção e na comercialização da gasolina no Brasil.</p>
                        <p>O valor do combustível nas nossas refinarias e terminais é muito inferior ao pago pelo consumidor final. Cerca de um terço do preço é da Petrobras. O preço na bomba incorpora a carga tributária e a ação dos demais agentes do setor de comercialização como: importadores, distribuidores, revendedores e produtores de biocombustíveis – fatores sobre os quais não possuímos controle.</p>
                    </div>
                    <div class="col-sm-4">
                        <img src="dist/hotsite/images/imagem_2.png" />
                    </div>
                </div>
            </div><!-- container -->
        </div><!-- container-fluid -->
        
        <!-- pergunta 3 -->
        <div class="container-fluid perguntas azul">
            <div class="container">
                <div class="row">
                    <div class="col-sm-1">
                        <img src="dist/hotsite/images/icone_3.png" />
                    </div>
                    <div class="col-sm-7">
                        <h5>Como é calculado o preço da gasolina nas refinarias?</h5>
                        <p>Os combustíveis derivados de petróleo são commodities e têm seus preços atrelados aos mercados internacionais, cujas cotações variam diariamente, para cima e para baixo. Essa lógica se aplica a outros tipos de commodities nas economias abertas, onde é possível importar e exportar como, por exemplo, trigo, café, metais, etc.</p>
                        <p>Num ambiente de economia aberta e liberdade de preços enfrentamos a concorrência dos importadores de combustíveis, cujos preços acompanham o mercado internacional. Assim, a variação dos preços nas refinarias é importante para que possamos competir de forma eficiente no mercado brasileiro.</p>
                    </div>
                    <div class="col-sm-4">
                        <img src="dist/hotsite/images/imagem_3.png" />
                    </div>
                </div>
            </div><!-- container -->
        </div><!-- container-fluid -->
        
        <!-- pergunta 4 -->
        <div class="container-fluid perguntas cinza">
            <div class="container">
                <div class="row">
                    <div class="col-sm-1">
                        <img src="dist/hotsite/images/icone_4.png" />
                    </div>
                    <div class="col-sm-7">
                        <h5>Por que a Petrobras adotou a estratégia de variar os preços da gasolina em intervalos curtos de tempo?</h5>
                        <p>Os combustíveis derivados de petróleo são commodities e têm seus preços atrelados aos mercados internacionais, cujas cotações variam diariamente. É natural, portanto, que os preços no Brasil também acompanhem o mercado internacional, para cima e para baixo. É importante acompanharmos o mercado para que possamos competir de forma eficiente no mercado brasileiro com os nossos concorrentes, principalmente os importadores, cujos preços podem variar diariamente.</p>
                        <p>Estamos focados em prover a energia para mobilidade com foco em resultados e orientação ao mercado.</p>
                        <p>Acompanhe os preços médios dos combustíveis que saem das nossas refinarias.</p>
                    </div>
                    <div class="col-sm-4">
                        <img src="dist/hotsite/images/imagem_4.png" />
                    </div>
                </div>
            </div><!-- container -->
        </div><!-- container-fluid -->
        
        <!-- pergunta 5 -->
        <div class="container-fluid perguntas verde">
            <div class="container">
                <div class="row">
                    <div class="col-sm-1">
                        <img src="dist/hotsite/images/icone_5.png" />
                    </div>
                    <div class="col-sm-7">
                        <h5>Há monopólio no setor de combustíveis?</h5>
                        <p>Não há monopólio neste setor no Brasil desde 2002, com base na Lei 9.478, a Lei do Petróleo.</p>
                        <p>Assim, existem outros agentes na indústria de petróleo, as importações e exportações foram permitidas e os preços são livres, estabelecidos pelos agentes de mercado, sem tabelamento por parte do governo.</p>
                        <p>Neste contexto, enfrentamos a concorrência de outros agentes, principalmente os importadores, cujos preços de combustíveis acompanham a oscilação no mercado internacional (para cima e para baixo).</p>
                        <p>Somos apenas um dos agentes na produção e comercialização de combustíveis no Brasil. Cerca de um terço do preço final da gasolina é da Petrobras.</p>
                    </div>
                    <div class="col-sm-4">
                        <img src="dist/hotsite/images/imagem_5.png" />
                    </div>
                </div>
            </div><!-- container -->
        </div><!-- container-fluid -->
        
        <!-- pergunta 6 -->
        <div class="container-fluid perguntas cinza">
            <div class="container">
                <div class="row">
                    <div class="col-sm-1">
                        <img src="dist/hotsite/images/icone_6.png" />
                    </div>
                    <div class="col-sm-7">
                        <h5>Se a Petrobras aumentar a produção de petróleo, isso impactará o preço da gasolina?</h5>
                        <p>O aumento da produção de petróleo contribui como insumo para o fornecimento da energia que move a sociedade. Os nossos custos de extração de petróleo não definem o preço da gasolina nas refinarias, pois se trata de um mercado de commodities, atrelado à variação internacional. Isso ocorre em qualquer país cuja economia é aberta, onde pode haver importações e exportações e onde haja a livre concorrência.</p>
                        <p>O preço final da gasolina é composto pela produção da Petrobras, mais carga tributária, distribuição, etanol obrigatório e revenda. Cerca de um terço do preço final é da Petrobras.</p>
                    </div>
                    <div class="col-sm-4">
                        <img src="dist/hotsite/images/imagem_6.png" />
                    </div>
                </div>
            </div><!-- container -->
        </div><!-- container-fluid -->
        
        <!-- pergunta 7 -->
        <div class="container-fluid perguntas azul">
            <div class="container">
                <div class="row">
                    <div class="col-sm-1">
                        <img src="dist/hotsite/images/icone_7.png" />
                    </div>
                    <div class="col-sm-7">
                        <h5>Por que é adicionado etanol na gasolina?</h5>
                        <p>A adição do etanol é uma obrigação legal dos distribuidores de combustíveis. A Lei N°8.723, de 1993, estipulou a mistura de álcool anidro na gasolina. Em poucos anos, novos decretos alteraram a porcentagem da mistura. Desde março de 2015, o percentual obrigatório de etanol anidro combustível na gasolina comum é de 27%. O percentual na gasolina premium é de 25%.</p>
                    </div>
                    <div class="col-sm-4">
                        <img src="dist/hotsite/images/imagem_7.png" />
                    </div>
                </div>
            </div><!-- container -->
        </div><!-- container-fluid -->
        
        <!-- pergunta 8 -->
        <div class="container-fluid perguntas cinza">
            <div class="container">
                <div class="row">
                    <div class="col-sm-1">
                        <img src="dist/hotsite/images/icone_8.png" />
                    </div>
                    <div class="col-sm-7">
                        <h5>A Petrobras vende a gasolina mais barata em outros países do que no Brasil?</h5>
                        <p>O preço cobrado no Brasil pela gasolina que sai da refinaria equipara-se aos preços de outros países que possuem mercados de derivados abertos e competitivos. No entanto, há uma grande variação na lógica de formação de preços de bomba em cada país. Além de eventuais diferenças nos preços de produtores, distribuidores e revendedores, o ambiente regulatório dos países pode diferir, devido aos impostos e eventuais subsídios governamentais.</p>
                        <p>Portanto, a comparação dos preços de combustíveis em diferentes países deve ser feita com ressalvas. As comparações pontuais podem ser prejudicadas pela velocidade com que as variações dos preços do petróleo no mercado internacional são repassadas aos preços domésticos.</p>
                        <p>Como referência, veja no gráfico os valores cobrados em países que possuem mercados de derivados abertos e competitivos.</p>
                    </div>
                    <div class="col-sm-4">
                        <img src="dist/hotsite/images/imagem_8.png" />
                    </div>
                </div>
            </div><!-- container -->
        </div><!-- container-fluid -->
        
        <!-- pergunta 9 -->
        <div class="container-fluid perguntas azul">
            <div class="container">
                <div class="row">
                    <div class="col-sm-1">
                        <img src="dist/hotsite/images/icone_9.png" />
                    </div>
                    <div class="col-sm-7">
                        <h5>Como é feita a composição do preço da gasolina ao consumidor?</h5>
                        <p>Não há relação direta com a situação conjuntural da empresa, nem mesmo com seus resultados financeiros. O que determina os ajustes é a variação do valor do petróleo e seus derivados no mercado internacional, associada às condições locais de mercado.</p>
                        <p>A formação de preços dos combustíveis nas refinarias da Petrobras segue a dinâmica dos mercados de commodities em ambiente de livre competição, acompanhando os movimentos do mercado internacional (para cima ou para baixo). Confira o preço médio da gasolina ao sair das nossas refinarias.</p>
                    </div>
                    <div class="col-sm-4">
                        <img src="dist/hotsite/images/imagem_9.png" />
                    </div>
                </div>
            </div><!-- container -->
        </div><!-- container-fluid -->
        
        <!-- pergunta 10 -->
        <div class="container-fluid perguntas verde">
            <div class="container">
                <div class="row">
                    <div class="col-sm-1">
                        <img src="dist/hotsite/images/icone_10.png" />
                    </div>
                    <div class="col-sm-7">
                        <h5>Como funciona o fornecimento de gasolina no Brasil?</h5>
                        <p>Ao abastecer seu veículo no posto, o consumidor adquire a gasolina “C”, uma mistura de gasolina “A” com etanol anidro, feita pelos distribuidores. A gasolina “A” pode ser produzida em nossas refinarias, por outros refinadores do país, por formuladores, pelas centrais petroquímicas ou, ainda, importada por empresas autorizadas pela ANP.</p>
                        <p>A estratégia de preços que anunciamos em 2016 se refere aos preços cobrados nas nossas refinarias e terminais para venda às distribuidoras.</p>
                        <p>Portanto,	a Petrobras Holding e a Petrobras Distribuidora atuam em ambientes de negócio diferentes e são empresas independentes, com autonomia na formação de seus preços.</p>
                        <p>A Petrobras Distribuidora é uma subsidiária que atua livremente e em iguais condições às demais, tendo independência para seu posicionamento de preços e escolha de fornecedores.</p>
                    </div>
                    <div class="col-sm-4">
                        <img src="dist/hotsite/images/imagem_10.png" />
                    </div>
                </div>
            </div><!-- container -->
        </div><!-- container-fluid -->
        
  </body>
</html>
