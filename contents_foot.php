<!-- 
Author  : Emmanuel Distingué NGBAME KOYAPOLO
Contact : ngbamedistingue@yahoo.com
Date    : 25 april 2021 
Statut  : Not yet finished...
-->

<div id="question" class="contents">
    <div class="title">
        <h1>VOUS AVEZ DES QUESTIONS?</h1>
        <p>Merci de nous écrire.</p>
    </div>
    <div class="element quiz">
        <div class="wrapper quiz-zone">
            <form method="post">
                <div class="contact-form">
                    <div class="input-fields plus">

                        <input type="text" name="noms" id="noms" class="input text-mesg" placeholder="Prénom et nom*"
                            required>

                        <input type="email" name="email" id="email" class="input text-mesg"
                            placeholder="Adresse e-mail*" required>

                        <input type="text" name="phone" id="phone" class="input text-mesg"
                            placeholder="Numéro de téléphone*" required>

                        <input type="text" name="sujet" id="sujet" class="input text-mesg" placeholder="Sujet*"
                            required>
                    </div>
                    <div class="msg plus">
                        <textarea name="message" id="message" placeholder="Message* écrire ici :)" required></textarea>
                        <input name="formQuiz" id="formQuiz" type="submit" class="btn" value="Envoyez">
                    </div>
                </div>
                <!-- gestion des données -->
                <?php include("quiz.php"); ?>
            </form>
        </div>
    </div>
</div>


<div class="contents end-contents">
    <div class="title">
        <h1>QUI SOMMES-NOUS ?</h1>
        <p>Nous sommes des chrétiens.</p>
    </div>
    <div class="element">
        <div class="wrapper quiz-zone after-quiz">
            <h1>ECOLE DES DISCIPLES</h1>
            <p>
                <b>Ce contenu n'est pas à jour le texte sera compléter dans la version suivante du site Merc!...</b><br>
                Invite Jésus dans ta vie si ce n'est pas déjà fait. Si tu commences juste à découvrir le christianisme, tu auras besoin de devenir un disciple du Christ avant de pouvoir mener une bonne vie de chrétien. Pour devenir un de ses disciples, prie Jésus et demande-Lui de te pardonner tous les péchés que tu as commis dans ta vie. Demande-lui d'emplir ton cœur pour t'aider à lutter contre les tentations et pour consacrer ta vie à le suivre [1] .
                Dans Jean 14 : 6, Jésus dit : « Je suis le chemin, la vérité et la vie. Nul ne vient au Père que par moi. » Ça signifie que le seul moyen d'avoir une relation avec Dieu est de suivre Jésus.
                
            </p>
        </div>
    </div>
</div>