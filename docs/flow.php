<?php
    require dirname(__DIR__) . '/header.php';
    require __DIR__ . '/menu.php';
?>
        <div class="span9">
            <h2>Process Flow<small> - Not your usual PHP script</small></h2>

            <section>
                <p>
                    If you've been working with PHP for any length of time you're probably used to writing short lived scripts. 
                    Each web page loaded on the client's side will, on the server side, launch a new PHP script, loads resources (such as a database connection), execute your code, close the resources and send the output (HTML) back to the client, and close the connection. 
                    This is the tried and true nature of the HTTP protocol over the past several decades. 
                </p>

                <p>
                    WebSockets and as a result using PHP in Ratchet is a little different. 
                    Only one script is executed and connections remain open. 
                    You may need to do things a little differently; you can't use any global variables as the context of the running process is not confined to a single connection.
                </p>
            </section>

            <section>
                <h3>Execution Order</h3>

                <p>Below, the diagram illustrates the order of execution beginning with a client requesting a web page on your site:</p>

                <p><img src="/assets/img/RatchetFlow.png"></p>

                <p>
                    As you can see, once the webpage has been loaded a WebSocket connection is made back to your Ratchet application, where if everything goes correctly, a connection remains open where either the server or client can send data to the other one at any given time.
                    This has been a network overview of how Ratchet will work.  To understand how your Ratchet application acts, continue on reading <a href="/docs/design">Design Philosophy</a>.
                </p>
            </section>
        </div>
    </div>
<?php
    require dirname(__DIR__) . '/footer.php';