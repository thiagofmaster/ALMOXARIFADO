<?php $this->layout('template', ['title' => $title]) ?>



<section class="section-body-content">
            <div class="cx_main_form_cadastrar">
                <h1>Cadastrar Um Novo Usuário</h1>
            </div>
            <!-- <div class="message_error">
                <h3>message </h3>
            </div> -->
            <?php if (!empty($register_result)) : ?>
            <div class="message_error">
                <h3><?= $register_result ?></h3>
            </div>
            <?php endif; ?>

            <form id="main_form_cadastrar" action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
                <div>
                    <input type="text" autofocus id="ciNome" name="cnNome" placeholder="Nome completo" />
                </div>
                <div>
                    <input type="email" id="ciNome" name="cnEmail" placeholder="E-mail" />
                </div>
                <div>
                    <input type="text" id="ciNickname" name="cnNickname" placeholder="usuário acesso" />
                </div>
                <div>
                    <input type="password" id="ciPassword" name="cnPassword" placeholder="senha acesso" />
                </div>

                <div>
                    <input type="text" name="cnCep" id="ciCep" placeholder="00000-000">
                </div>

                <div>
                    <input type="text" id="ciRua" name="cnRua" placeholder="Rua, AV., Travessa" />
                </div>

                <div>
                    <input type="number" id="ciNumero_residencial" name="cnNumero_residencial" placeholder="Número°" />
                </div>

                <div>
                    <input type="text" id="ciComplemento" name="cnComplemento" placeholder="Complemento" />
                </div>

                <div>
                    <input type="text" id="cibairro" name="cnBairro" placeholder="Bairro" />
                </div>

                <div>
                    <input type="text" id="ciCidade" name="cnCidade" placeholder="Cidade" />
                </div>

                <div>
                    <input type="text" id="ciEstado" name="cnEstado" placeholder="Estado, ex: BA, SP, RJ" />
                </div>

                <div id="telefones">
                    <div class='layoutTelefone'>
                        <input type="number" id="ciTelefone" name="cnTelefone[]" placeholder="(00) 00000-0000">
                        <button type="button" id="ciButtonAddTel">Adicionar Telefone</button>
                    </div>
                </div>
                <div class="btn_submit_form_cad">
                    <button type="submit">Cadastrar</button>
                </div>

            </form>
        </section>
