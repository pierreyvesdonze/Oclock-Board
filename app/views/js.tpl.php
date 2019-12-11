<main>
    <article>
        
<span>#1</span> Créer et ajouter une liste dans le DOM",
"<p>
    <code>
        <pre>
                            var newLi</span> = <span>document.createElement</span>('li');
                            var newLiContent = <span>document.textContent</span>('Un peu de contenu...');
                            newLi.<span>appendChild</span>(newLiContent);

                            var truc = <span>document.querySelector</span>('#myDiv');
                            truc.<span>appendChild</span>(newLi);
                        </pre></code>

</p>
<span>#2</span> Créer des fonctions anonymes dans un module
<p>
    <code>
        <pre>
                            var app = {
                                init: <span>function</span>() {
                                    app.<span>myFunction</span>(argument);
                                    app.<span>myOverFunction()</span>;
                                },

                                myFunction: <span>function</span>(parameter) {
                                    var question = <span>prompt</span>(parameter);

                                    <span>return</span> question;
                                },
                            };
                        </pre></code>
</p>
    </article>
</main>