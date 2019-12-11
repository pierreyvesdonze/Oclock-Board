<main>
    <article>
    
<h3>Mémos PHP</h3>
<span>#1</span> Ajouter un élément dans un array
<p>
    <code>
        <pre>
                            \$array = []; <br>
                                \$array[] = 'elt'; <br>
                        
                        </pre></code></p>"
<span>#2</span> Récupérer des paramètres via l'url",
<p>
    <code>
        <pre>
                            \$_GET['id'] = 'name';
                            <br>
                            <span>Url : 'xxx.php?id='name'</span>
                        </pre></code>
</p>

<span>#3</span> Parcourir un tableau associatif
<p>
    <code>
        <pre>
                            <span>\$data</span> = ['elt' => 3, 'pet' => 'cat', 'float' => 2.1];

                            foreach (<span>\$data</span> as \$key => \$value) {
                                echo \$value;
                            }
                        </pre></code>
</p>
    </article>
</main>