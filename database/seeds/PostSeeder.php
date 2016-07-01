<?php

use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
            [
                'titulo'            =>  'Me Chamo Rafael Nascimento, Prazer!',
                'conteudo'          =>  'Ola, me chamo Rafael do Nascimento, tenho 27 anos, natural de Brasilia/DF, recem formado
                                         em Sistemas de Informaçãoo pelo Centro Universitário Estácio do Ceara. Sou casado há quase
                                         quase dois anos e tenho um filho chamado de Samuel com um ano e seis meses. Minha ultima experiência profissional
                                         foi como estágio na Prefeitura de Fortaleza onde foi possível a realizaçãoo de atividades como suporte e desenvolvimento
                                         utilizando Codeigniter e Laravel. Outra experiência foi na Tecvel Auto Center como Desenvolvedor, nessa empresa tive a oportunidade
                                         de desenvolver uma aplicaçãoo para oficina mecânica do zero utilizando codeigniter. Fora essas experiências, venho desenvolvendo alguns
                                         trabalhos autônomos com desenvolvimento. Tenho alguns projetos disponíveis no gitub para análise, onde é possével efetuar o download.',
                'imagem'            =>  '1467395268.jpg',
                'usuario_id'        =>  1,
                'data_publicacao'   =>  '2016/01/01',
                'created_at'        =>  \Carbon\Carbon::now(),
                'updated_at'        =>  \Carbon\Carbon::now()
            ],
            [
                'titulo'            =>  'Porque Trabalhar No GEQ?',
                'conteudo'          =>  'Poder ter a oportunidade de trabalhar no Grupo Edson de Queiroz vai me proporcionar um grande aprendizado profissional e pessoal. Poter fazer parte da história da empresa seria uma honra.',
                'imagem'            =>  '1467396971.jpg',
                'usuario_id'        =>  4,
                'data_publicacao'   =>  '2016/01/01',
                'created_at'        =>  \Carbon\Carbon::now(),
                'updated_at'        =>  \Carbon\Carbon::now()
            ],
            [
                'titulo'            =>  'História do Edson de Queiroz',
                'conteudo'          =>  'Edson Queiroz (Cascavel, 12 de abril de 1925 — Pacatuba, 8 de junho de 1982) foi um empresário brasileiro. A partir da empresa de distribuição de gás criou o Grupo Edson Queiroz. Atualmente as empresas do grupo são controladas pela viúva, Yolanda Vidal Queiroz e seus filhos. Filho de Genésio Queiroz e Cordélia Antunes Queiroz, Edson trabalhou durante a sua juventude (1939 – 1945), no armazém de estivas do pai em Fortaleza. Foi aluno do Colégio Cearense, passou pelo Seminário da Prainha e concluiu o ginásio no Liceu do Ceará. Casou-se em 8 de setembro de 1945 com Yolanda Pontes Vidal com quem teve seis filhos: Airton José, Myra Eliane, Edson Filho, Renata, Lenise e Paula.

Em 1947, juntamente com o pai e outros sócios, montou a Loteria Estadual de Fortaleza e se formou técnico contábil no ano seguinte, construiu e iniciou a exploração do Abrigo Central e fundou a Loteria Estadual de Pernambuco, em 1949.

Em 18 de junho de 1951, Edson Queiroz fundou a Edson Queiroz e Cia., uma empresa de distribuição de gás liquefeito de petróleo (GLP), obteve no ano seguinte a concessão de cotas de GLP da primeira Refinaria Nacional, depois renomeada Refinaria Landulpho Alves e fundou a Edson Queiroz Navegações, com uma frota inicial de cinco embarcações. Em 13 de abril de 1955 fundou uma filial da Edson Queiroz e Cia. no Pará e a S.A. Rádio Verdes Mares é fundada em junho. A Edson Queiroz e Cia. passou à sociedade anônima, sob a razão social de Norte Gás Butano S.A., em 1957 e foi criada a Sociedade Butano Ltda. para atuar no setor imobiliário. A Norte Gás Butano construiu e inaugurou, em 1959, o primeiro terminal oceânico do Nordeste, em Fortaleza, o Terminal Ernesto Igel e no ano seguinte, em 21 de abril, inaugurou o terminal de gás de Belém. Em 1961, adquiriu o controle acionário da Rádio Verdes Mares AM. Em 1963 inaugurou a Tecnomecânica Norte Ltda., a Tecnorte e a Estamparia e Esmaltação Nordeste S/A Esmaltec, para fabricação de botijões e fogões.

Edson Queiroz comprou, em 1967, as fábricas de bicicletas Bristol e Göering, do Rio de Janeiro, que posteriormente seriam vendidas à Monark e se associou a José Afonso Sancho no jornal Tribuna do Ceará, onde implantou o sistema pioneiro de composição a frio e impressão offset.


Estátua de Edson Queiroz a entrada de Cascavel.
Associado ao empresário Edmundo Rodrigues, Queiroz fundou, em 1968, a Cascavel Castanha de Caju Ltda., em Cascavel, de beneficiamento e exportação de castanha de caju e em 26 de maio do ano seguinte recebeu a medalha do Mérito Timbira da Cidade de São Luís, outorgada pelo governador do Maranhão, José Sarney. Em janeiro de 1970 inaugurou a Piauí Gás Butano, em Teresina e a TV Verdes Mares. Em 17 de abril de 1971, os conselhos Curador e Diretor da Fundação Edson Queiroz decidiram criar a Universidade de Fortaleza (UNIFOR). Em 5 de março recebeu do governador Plácido Aderaldo Castelo a medalha da Abolição, do governo do Ceará.

Em 1972, Queiroz iniciou investimentos no setor pecuário, a Butano Agropecuária e recebeu o título de Cidadão de São Luís, em 3 de dezembro. A Norte Gás Butano comprou o acervo da Brasilgás em Alagoas, Pernambuco, Pará e Rio Grande do Norte, em 1973 e inaugurou o terminal José Ribamar Marão, da Maranhão Gás Butano. No mesmo ano recebeu a Placa de Prata Homem do Petróleo do Ano. Em 1975, inaugurou a Rádio Verdes Mares FM, recebeu o prêmio Homem Tendência, da revista Tendência. No ano seguinte comprou a Heliogás no Rio de Janeiro e entrou em operação a Norte Gás Butano Distribuidora Ltda., sucessora da Norte Gás Butano S/A Comércio e Participações, que se transformou numa das holdings do Grupo. Edson Queiroz recebeu o título de "Cidadão de Belém" e o troféu "Mascate do Ano" 1976, da Confederação Nacional do Comércio no Rio de Janeiro.',
                'imagem'            =>  '1467396938.jpg',
                'usuario_id'        =>  3,
                'data_publicacao'   =>  '2016/01/01',
                'created_at'        =>  \Carbon\Carbon::now(),
                'updated_at'        =>  \Carbon\Carbon::now()
            ],
            [
                'titulo'            =>  'História do Yolanda Queiroz',
                'conteudo'          =>  'Yolanda Pontes Vidal Queiroz (Fortaleza, 12 de novembro de 1928 — Fortaleza, 17 de junho de 2016), mais conhecida como Yolanda Queiroz, foi uma empresária brasileira. Foi presidente do Grupo Edson Queiroz, fundado em 1951 por seu marido, o empresário Edson Queiroz. Em 1982, com o falecimento de Edson, Yolanda assume o controle do Grupo com o auxílio dos filhos.[1].Filha de Maria Pontes Vidal e Luis Vidal, Yolanda estudou durante nove anos no Colégio das Dorothéas, casando-se aos 16 anos com Edson Queiroz, de cuja união tiveram seis filhos: Airton José Vidal Queiroz[2] , Myra Eliane, Edson Queiroz Filho, Renata, Lenise e Paula, que já lhe deram 15 netos.

Companheira assídua da vida e atividades do marido ao longo de 37 anos, Yolanda participou de todas as etapas do crescimento e consolidação do Grupo Edson Queiroz, constituindo um dos 100 maiores conglomerados empresariais do Brasil, com especial destaque no seu contexto socioeconômico. O grupo atua em diversos setores, como distribuição de gás, água mineral e refrigerantes, metalurgia, comunicação, agropecuária, agroindústria e imóveis.[3] Com a morte do marido, Yolanda passou a assumir a presidência do grupo, auxiliada pelos filhos Airton e Edson, continuando assim a sua expansão.[4]',
                'imagem'            =>  '1467396955.jpg',
                'usuario_id'        =>  2,
                'data_publicacao'   =>  '2016/01/01',
                'created_at'        =>  \Carbon\Carbon::now(),
                'updated_at'        =>  \Carbon\Carbon::now()
            ],
            [
                'titulo'            =>  'Grupo Edson Queiroz',
                'conteudo'          =>  'Grupo Edson Queiroz é um conglomerado de empresas, em sua maioria fundadas pelo empresário brasileiro Edson Queiroz. É um dos maiores grupos empresariais da região nordeste do Brasil.

O conglomerado surgiu com a aquisição da empresa Ceará Gás Butano, em 1951. O ponto alto do desenvolvimento do grupo foi a criação da Fundação Edson Queiroz em 1971, seguido da criação da universidade por ela mantida, a Universidade de Fortaleza (UNIFOR), em 1973.

O grupo foi dirigido pela viúva do fundador, Yolanda Queiroz, até à sua morte em 2016, e posteriormente por seus filhos.',
                'imagem'            =>  '1467396912.jpg',
                'usuario_id'        =>  1,
                'data_publicacao'   =>  '2016/01/01',
                'created_at'        =>  \Carbon\Carbon::now(),
                'updated_at'        =>  \Carbon\Carbon::now()
            ],


        ]);
        $this->command->info('Titulos impotados com sucesso.!');
    }
}
