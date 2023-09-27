<h2>Ator 1: Empresa</h2>
<h3>Fazer Cadastro no Site</h3>

<b>Fluxo normal:</b> <br>
1 - Empresa informa nome fantasia <br>
2 - Empresa informa razão social <br>
3 - Empresa informa CNPJ <br>
4 - Empresa informa CNAE <br>
5 - Empresa informa natureza jurídica <br>
6 - Empresa informa número de contato <br>
7 - Empresa informa endereço <br>
8 - Empresa informa quantidade de funcionários <br>
9 - Sistema valida Empresa (sublinhado) <br>
<b>Extensões:</b> <br>
3a - Se CNPJ for inválido, solicitar novo CNPJ <br>
9a - Se empresa for inválida, solicitar dados válidos <br>
<br>

<h3>Cadastrar Vaga</h3>
<i>Pré-condição: usuário estar autenticado</i> <br>
<b>Fluxo normal:</b> <br>
1 - Empresa informa nome do cargo <br>
2 - Empresa informa quantidade de vagas <br>
3 - Empresa informa qualificações necessárias <br>
4 - Empresa informa benefícios da vaga <br>
5 - Empresa informa etapas da seleção <br>
6 - Empresa informa descrição da vaga, atribuições e observações pertinentes <br>
<br>

<h3>Alterar Status do Candidato</h3>
<i>Pré-condição: usuário estar autenticado</i> <br>
<b>Fluxo normal:</b> <br>
1 - Empresa seleciona candidato <br>
2 - Empresa seleciona novo status do candidato <br>
3 - Empresa salva alteração <br>
<br>

<h3>Alterar Status da Vaga</h3>
<i>Pré-condição: usuário estar autenticado</i> <br>
<b>Fluxo normal:</b> <br>
1 - Empresa seleciona vaga <br>
2 - Empresa seleciona novo status da vaga <br>
3 - Empresa salva alteração <br>
<br>

<h3>Visualizar Perfil do Candidato</h3>
<i>Pré-condições: usuário estar autenticado; ter vaga cadastrada;</i> <br>
<b>Fluxo normal:</b> <br>
1 - Empresa seleciona vaga <br>
2 - Empresa seleciona opção "candidatos à vaga" <br>
3 - Empresa seleciona candidato <br>


<h3>Atualizar Perfil da Empresa</h3>
<i>Pré-condição: estar autenticado</i> <br>
<b>Fluxo normal:</b> <br>
1 - Empresa seleciona “editar perfil” <br>
2 - Empresa atualiza informações de cadastro <br>
3 - Empresa salva alteração <br>
<b>Extensões:</b> <br>
2a - Se houver tentativa de alteração do CNPJ informar que não é possível realizar a alteração. <br>
<br>
<br>

<h2>Ator 2: Candidato</h2>
<h3>Fazer Cadastro no Site</h3>
<b>Fluxo normal:</b> <br>
1 - Candidato informa nome completo <br>
2 - Candidato informa data de nascimento <br>
3 - Candidato informa habilidades e competências <br>
4 - Candidato informa CPF <br>
5 - Candidato informa email <br>
6 - Candidato informa número de contato <br>
7 - Candidato informa endereço <br>
<b>Extensões:</b> <br>
4a - Se CPF for inválido, deve exibir o erro e solicitar um CPF válido <br>
5a - Se email for inválido, deve exibir o erro e solicitar um email válido <br>
<br>

<h3>Visualizar Perfil da Empresa</h3>
<i>Pré-condição: estar autenticado; ter vaga cadastrada;</i> <br>
<b>Fluxo normal:</b> <br>
1 - Candidato seleciona vaga <br>
2 - Candidato seleciona "perfil da empresa" <br>
<br>

<h3>Atualizar Perfil</h3>
<i>Pré-condição: estar autenticado</i> <br>
<b>Fluxo normal:</b> <br>
1 - Candidato seleciona “editar perfil” <br>
2 - Candidato atualiza informações de cadastro <br>
<b>Extensões:</b> <br>
2a - Se houver tentativa de alteração do CPF informar que não é possível realizar a alteração. <br>
<br>

<h3>Visualizar Candidaturas</h3>
<i>Pré-condição: estar autenticado</i> <br>
<b>Fluxo normal:</b> <br>
1 - Candidato seleciona “minhas vagas” <br>
<b>Extensões:</b> <br>
1a - Se o candidato não tiver nenhuma candidatura cadastrada, exibir mensagem informando. <br>
<br>

<h3>Candidatar-se para Vaga</h3>
<i>Pré-condição: estar autenticado</i> <br>
<b>Fluxo normal:</b> <br>
1 - Candidato seleciona a vaga de interesse <br>
2 - Candidato seleciona “candidatar-se” <br>
<br>
<br>

<h2>Ator 3: Sistema</h2>
<h3>Autenticar Usuário</h3>
<b>Fluxo normal:</b> <br>
1 - Usuário fornece login e senha <br>
2 - Sistema valida usuário <br>
3 - Sistema permite acesso <br>
<b>Extensões:</b> <br>
1a - Se login e senha não forem válidos, o Sistema deve informar o erro ao usuário e solicitar as informações novamente <br>
