<?php
function print_header(){ ?>
	<header>
	    <img id="wordmark" src="/~17js46/a5/img/queens-wordmark.png" alt="Queen's University"/>
        <div id="hero-container" class="bee">
            <div class="overlay"></div>
            <img id="logo" src="/~17js46/a5/img/queens-logo.png" alt="Queen's University Coat of Arms"/>
            <div id="site-title">
                <a href="/~17js46/a5/">Department of Agriculture</a>
            </div>
            <nav>
                <ul>
                    <li><a href="/~17js46/a5/about.php">About</a></li>
                    <li><a href="/~17js46/a5/programs.php">Programs</a></li>
					<li>
						<form id="search-box" method="GET" action="/~17js46/a5/search-results.php">
							<label for="search" class="visuallyhidden" >Search term(required):</label>
							<input type="text" id="input-box" name="search"  placeholder="Search" maxlength="100" required/>
							<input type="submit" class="visuallyhidden" id="submit" />
						</form>
					</li>
                </ul>
            </nav>
            <ul class="social">
                <li>
                    <a href="https://www.facebook.com/QueensComputing">
                        <i class="icon-facebook-square" aria-hidden="true" title="Facebook"></i>
                        <span class="sr-only">Facebook</span>
                    </a>
                </li>
                <li>
                    <a href="https://twitter.com/queenscomputing">
                        <i class="icon-twitter-square" aria-hidden="true" title="Twitter"></i>
                        <span class="sr-only">Twitter</span>
                    </a>
                </li>
            </ul>
        </div>
	</header>
<?php
}