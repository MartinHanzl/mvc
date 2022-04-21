{block name='main-nav'}
    <div class="main-nav-w">
        <div class="signed-user-div p-3 d-flex flex-column align-items-center">
            <img src="https://scontent.fprg4-1.fna.fbcdn.net/v/t39.30808-6/277729726_2269123523253936_8294867813176363298_n.jpg?_nc_cat=110&ccb=1-5&_nc_sid=09cbfe&_nc_ohc=Ht-F0ngBXGIAX8Zow9s&_nc_ht=scontent.fprg4-1.fna&oh=00_AT9tv4rc-43X_KogFxk3Mjyp2qtvyWyatRrAEoSDpCtK_g&oe=62640A05"
                alt="" width="64" height="64" class="mb-3">
            <h5>{$fullname}</h5>
            <small>{$email}</small>
        </div>
        <ul>
            <li class="p-3"><a href="/"><i class="las la-home"></i><span>Domů</span></a></li>
            <li class="p-3"><a href="/profile"><i class="las la-user"></i><span>Profil</span></a></li>
            <li class="p-3"><a href="#"><i class="las la-calendar"></i><span>Kalendář</span></a></li>
            <li class="p-3"><a href="#"><i class="las la-clock"></i><span>Zápis hodin</span></a></li>
            <li class="p-3"><a href="#"><i class="las la-running"></i><span>Aktivita</span></a></li>
            <li class="p-3"><a href="#"><i class="las la-coins"></i><span>Příjmy a výdaje</span></a></li>
            <li class="p-3"><a href="#"><i class="las la-phone"></i><span>Seznam kontaktů</span></a></li>
            <li class="p-3"><a href="#"><i class="las la-image"></i><span>Nástěnka</span></a></li>
            {* <li class="p-3"><a href="#"><i class="las la-chess-knight"></i><span>Minihry</span></a></li> *}
            <li class="p-3"><a href="#"><i class="las la-pencil-ruler"></i><span>Užitečné funkce</span></a></li>
            {* <li class="p-3"><a href="#"><i class="las la-cog"></i><span>Správa systému</span></a></li> *}
            <li class="p-3"><a href="#">
                    <form action="/auth" method="post">
                        <input type="hidden" name="type" value="logout">
                        <i class="las la-sign-out-alt"></i><input type="submit" value="Odhlásit se"
                                style="background: transparent; color: white; border: none;outline: none;">
                    </form>
                </a>
            </li>
        </ul>
    </div>
{/block}