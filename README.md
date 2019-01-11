# salao
projeto salão de beleza no Laravel


# Execute este comando para colocar em rede o projeto
php artisan serve --host=SeuIP --port=PORTA 

# Execute este comando quando quiser criar: um Model, um Migrete e um controlador ao Mesmo tempo!
php artisan make:model NomeModel -rm



# Instalar o CKEditor no Laravel
Para instalar o CKEditor no Laravel, abra o prompt de comando no diretório raiz do seu projeto e execute o comando abaixo.

composer require unisharp/laravel-ckeditor

O comando acima instalará os pacotes do CKEditor no diretório do fornecedor do seu projeto.
Em seguida, abra seu config / app.php e coloque a linha abaixo no array de provedores.

Unisharp\Ckeditor\ServiceProvider::class,

Após as etapas acima, execute o comando abaixo, que copia alguns dos arquivos e pastas de "vendor \ unisharp \ laravel-ckeditor" para "public \ vendor \ unisharp \ laravel-ckeditor". 

php artisan vendor:publish --tag=ckeditor

# Como usar o CKEditor

Nesta fase, concluímos com as etapas para instalar o pacote CKEditor. Agora vamos ver como usar o CKEditor.

Digamos que tenhamos uma área de texto que deve ser substituída pelo CKEditor. Para isso, estamos adicionando o id "summary-ckeditor" à área de texto.

<textarea class="form-control" id="summary-ckeditor"></textarea> 

Em seguida, precisamos incluir o arquivo ckeditor.js e escrever um código JavaScript que substitua a textarea pelo CKEditor.


<script src="{{ asset('vendor/unisharp/laravel-ckeditor/ckeditor.js') }}"></script>
<script>
    CKEDITOR.replace( 'summary-ckeditor' );
</script>



