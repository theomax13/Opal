<div class="fixed-bottom mx-0 footer bg-dark text-light ">
    <div class="recadrage">
        <div class="d-flex first-box-footer">
            <div class="Bloc1">
                <img src="../../../public/images/logo-opal.svg" alt="Logo Opal" id="logo_footer">
            </div>
            <div class="Bloc2">
                <ul class="list-unstyled">
                    <li class="fw-bold entreprise">L’entreprise</li>
                    <li>OpalTrip</li>
                    <li>Adresse</li>
                    <li>Téléphone</li>
                    <li>Email</li>
                </ul>
            </div>
            <div class="Bloc3">
                <ul class="list-unstyled">
                    <li class="fw-bold site-web">Le site web</li>
                    <li>Politique de confidentialité</li>
                    <li>Mentions légales</li>
                    <li>Conditions générales d’utilisation</li>
                    <li>Conditions générales de vente</li>
                    <li>Plan du site</li>
                </ul>
            </div>
            <div class="Bloc4">
                <div>
                    <div class="fw-bold newsletter">Newsletter</div>
                    <div class="newsletter-text">
                        <p>
                            Ne manquez aucune de nos dernières actualités en vous abonnant à notre newsletter !
                            Inscrivez-vous dès maintenant pour rester au courant de toutes nos nouvelles
                        </p>
                    </div>
                </div>
                <div>
                    <form action="" method="post">
                        <label for="email"></label>
                        <input type="email" name="email" id="email" placeholder="Votre mail">
                        <button type="submit">S'abonner</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="white-line-between-box"></div>
        <div class="d-flex bg-dark second-box-footer">
            <div class="copyright">
                <p>
                    2023 Création du site web par Opal
                </p>
            </div>
            <div class="reseauxSociaux">
                <a href="instagram">
                    <i class="fa-brands fa-instagram"></i>
                </a>
                <a href="facebook">
                    <i class="fa-brands fa-facebook"></i>
                </a>
                <a href="tiktok">
                    <i class="fa-brands fa-tiktok"></i>
                </a>
            </div>
        </div>
    </div>
</div>

<style>
.footer{
    width: 100%;
    padding-right: 2%;
    padding-left: 2%
}
.first-box-footer{
    height: 75%; 
    padding-bottom: 2.5%;
}
#logo_footer{
    height: 75px;
    margin-top: 25%;
    margin-left: 15%;
}
.Bloc1, .Bloc2{
    width: 20%;
}
.Bloc2{
    margin-top: 2.5%
}
.Bloc3, .Bloc4{
    margin-top: 2.5%;
    width: 30%;
}
.newsletter, .site-web, .entreprise{
    text-decoration: underline;
}
.newsletter-text{
    width: 75%;
}
.second-box-footer{
    height: 25%;
    margin-top: 1%;
    display: flex;
}
.copyright{
    width: 50%;
    color: white;
}
.reseauxSociaux{
    justify-items: end; 
    width: 50%;
}
i{
    color: #ffffff;
}
.white-line-between-box{
    background-color: #ffffff;
    height: 1px
}
</style>
