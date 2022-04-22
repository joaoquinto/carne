<?php
function carneMes()
{
  include_once "./bd/carneQuery.php";



  for ($i = 1; $i <= 12; $i++) {
    $nome = $aluno[0];
    $data_mensalidade = $aluno[1];
    $valor = $aluno["meses"][$i];
    $ano = $aluno[3];
    $ultimoDiaDoMes = date("t");
    $pagamentoAposDataMensalidade = $data_mensalidade + 1;
    $anoAtual = date('y');
    $mesAtual = date('m');
    $pagamentoDepoisDaMensalidade = ($valor === "0" ? "R$ 0" : $valor + 11);
    $valorDoPagamentoAtrasado = number_format($valor + ($valor * 0.25), 2, ",");
    $carne = <<<HTML
        <section class="container-carne">
          <!-- Original -->
          <div class="carne-item">
            <header class="header-carne">
              <img src="./assets/img/image1.png" class="logo-carne" alt="Colégio Multimédio LTDA">
              <h2 class="title-carne">Colégio Multimédio LTDA <br> <span>Carnê de pagamento</span></h2>
            </header>
            <p class="ano">2022</p>
            <ul class="informacoes-pagamento">
            <li class="text-preto">Aluno: <span>$nome</span></li>
            <li class="text-preto"><span>Série: $ano °ano - EM</span></li>
              <li class="text-preto">
                Referente á Mensalidade: <span class="mes">$i/12</span>
              </li>
              <li class="text-preto">Valor: R$ <span>$valor</span></li>
              <li>
                <div class="valores">
                  <p class="texto-verde">Pagamento até $data_mensalidade/$mesAtual/$anoAtual: <span>R$ $valor</span></p>
                  <p class='texto-marrom'>Pagamento de $pagamentoAposDataMensalidade/$mesAtual/22 à $ultimoDiaDoMes/$mesAtual/22 <span>R$ $pagamentoDepoisDaMensalidade</span></p>
                  <p class='texto-vermelho'> <span>R$ $valorDoPagamentoAtrasado</span></p>
                </div>
              </li>
              <li>
                <div class="valor-pago">
                  <p>Valor pago:R$ </p>
                  <p>Data</p>
                </div>
              </li>
              <li>
                <ul class="forma-de-pagamento">
                  <li>Forma de Pg: </li>
                  <li>PIX <span>( )</span> </li>
                  <li>Din <span>( )</span> </li>
                  <li>Transf. <span>( )</span> </li>
                  <li>Déb <span>( )</span> </li>
                  <li>Cré <span>( )</span> </li>
                </ul>
              </li>
            </ul>
          </div>
          <!-- Copia -->
          <div class="carne-item">
            <header class="header-carne">
              <img src="./assets/img/image1.png" class="logo-carne" alt="">
              <h2 class="title-carne">Colégio Multimédio LTDA <br> Carnê de pagamento</h2>
            </header>
            <p class="ano">2022</p>
            <ul class="informacoes-pagamento">
            <li class="text-preto">Aluno: $aluno[0]</li>
            <li class="text-preto">Série: $ano °ano - EM</li>
              <li class="text-preto">
                Referente á Mensalidade: <span class="mes"> $i/12</span>
              </li>
              <li class="text-preto espacamento">Valor: R$  <span>$valor</span></li>
              <li>
                <div class="valor-pago">
                  <p class="">Valor pago:R$ </p>
                  <p class="">Data</p>
                </div>
              </li>
              <li>
                <ul class="forma-de-pagamento">
                  <li>Forma de Pg: </li>
                  <li>PIX <span>( )</span> </li>
                  <li>Din <span>( )</span> </li>
                  <li>Transf. <span>( )</span> </li>
                  <li>Déb <span>( )</span> </li>
                  <li>Cré <span>( )</span> </li>
                </ul>
              </li>
            </ul>
          </div>
        </section>
       HTML;

    if ($i == $mesAtual) {
      echo $carne;
    }
  }
}
