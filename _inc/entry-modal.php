<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
          aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="myModalLabel">COMPRAR INGRESSO</h4>
        </div>
        <div class="modal-body">
          <div id="wrapper">
            <div id="steps">
              <form id="formElem" class="form-horizontal" name="formElem" action="" method="post">
                <fieldset class="step">
                  <legend>Identifique-se!</legend>
                  <p>
                    <label for="email">Seu Email</label>
                    <input id="email" value="" name="email" class="form-control"
                    placeholder="informe seu e-mail" type="email" AUTOCOMPLETE=OFF/>
                  </p>
                </fieldset>
                <fieldset class="step">
                  <legend>Diga mais sobre você</legend>
                  <p>
                    <label for="nome">Nome completo</label>
                    <input id="nome" name="nome" class="form-control" type="text" AUTOCOMPLETE=OFF/>
                  </p>

                  <p>
                    <label for="celular">Telefone Celular</label>
                    <input id="celular" name="celular" class="form-control" placeholder="" type="tel"
                    AUTOCOMPLETE=OFF/>
                  </p>

                  <p>
                    <label><input type="checkbox" id="deficiencia_fisica_check"> Sou Portador de Deficiência Física</label>
                    <input id="deficiencia_fisica" name="deficiencia_fisica" class="form-control"
                    value=""  type="text" AUTOCOMPLETE=OFF style="display: none;"/>
                  </p>

                  <p>
                    <label><input type="checkbox" id="restricao_alimentar_check"> Tenho Restrições Alimentares</label>
                    <input id="restricao_alimentar" name="restricao_alimentar" class="form-control"
                    value="" type="text" AUTOCOMPLETE=OFF style="display: none;"/>
                  </p>

                  <p>
                    <label for="trilha">Qual sua trilha favorita?</label>
                    <select id="trilha" name="trilha" class="form-control">
                      <option>Web</option>
                      <option>Mobile</option>
                      <option>Hackathon</option>
                    </select>
                  </p>
                </fieldset>
                <fieldset class="step">
                  <legend>Inscrever em</legend>
                  <p>
                    <input type="hidden" name="categoria" id="categoria">
                    <a href="#" id="categoria_1" class="btn btn-primary btn-lg btn-block "><b>Palestras
                      <br>Sábado 24 de outubro
                      <br> R$70,00</b> </a>
                      <a href="#" id="categoria_2" class="btn btn-primary btn-lg btn-block"><b>Palestras +
                        Hackathon
                        <br>Sábado 24 e Domingo 25 de outubro
                        <br> R$100,00</b> </a>
                        <a href="#" id="categoria_3" class="btn btn-primary btn-lg btn-block"><b>Hackathon
                          <br>Domingo 25 de outubro
                          <br> R$50,00</b> </a>
                        </p>

                      </fieldset>
                      <fieldset class="step">
                        <legend>Pagar a conta</legend>
                        <p>
                          Está quase terminando.... só falta pagar!<br>
                          Você será direcionado para o site do <b>PagSeguro</b> para realizar o pagamento e redicionado novamente para nosso site no final da transação.<br>
                          Obrigado por se inscrever!
                        </p>

                        <p>
                          <a href="#" id="pagar" class="btn btn-primary btn-lg btn-block">
                            Pagar agora
                          </a>
                        </p>
                      </fieldset>
                    </form>
                  </div>
                  <div id="navigation" style="display:none;">
                    <ul>
                      <li class="selected">
                        <a href="#">Identique-se</a>
                      </li>
                      <li>
                        <a href="#">Diga mais</a>
                      </li>
                      <li>
                        <a href="#">Qual vai ser?</a>
                      </li>
                      <li>
                        <a href="#">Pagar a conta</a>
                      </li>
                    </ul>
                  </div>
                </div>

              </div>
            </div>
          </div>
        </div>
