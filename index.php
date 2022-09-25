<?php
    

    /*+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++/
    +  Iyi programme yakozwe na kirogodye Cony umu programmer wi Burundi yayikoze muri php ariko atesta les   +
    +         conditions yisunze ussd application. kuyikoresha no kuyi modifiant nikuri gusa ntirihishwa      +
    +                                                                                                         +
    +         Facebook: Fb.me/KIRO.CONY                                                                       +
    +         Instagram: @kirogodye                                                                           +
    +         Twitter: @kirogodye98                                                                           +
    +         Github: Kirogodye                                                                               +
    +         Reddit: Kirogodye                                                                               +
    +         Email: kirogodye@mail.com                                                                       +
    /++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++/
    +                                                                                                         +
    +   Ce programme est develope par Kirogodye cony Le26-08-2022 pour test la condition                      +
    +    switch en php. Trouvez-moi sur les liens ci-hauts                                                    +
    +                                                                                                         +
    /++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ +/ 
    +                                  									                                      +
    +  This program develop by Kirogodye cony as a programmer from Burundi to test switch condition using     +
    +  the ussd application model. You can get to these links.                                                +
    +                                                                                                         +
    + +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++***/

    echo "Welcome here to tech coilbit technology\n\n";
    echo "Ururimi/Langue/language\n";

    echo "1. Ikirundi\n";
    echo "2. Francais\n";
    echo "3. English\n";
    $lang=(int)readline(" \n");

    switch ($lang) {
        case '1':
            echo "Mwahisemwo neza ikirundi\n";

            //menu kirundi
            echo "1. Iyandikishe\n";
            echo "2. kuraba ubuntunzi\n";
            echo "3. Kubikura\n";
            echo "4. Kurungika\n";
            echo "5. Gusaba ingurane\n";
            echo "6. Menya abo turi\n";

            $menu=(int)readline(" \n");
            switch ($menu) {
                case '1':

                    //kwugurura ikonte
                    $creator="kirogodye";
                    $name=(string)readline("Andika izina: \n");
                      if ($name===$creator) {
                        echo "Ntiwemerewe gukoresha iryo zina\n";
                        return 0;
                    }
                    $uname=(string)readline("Andika iritazirano: \n");
                    $date=(int)readline("Umwaka w'amavuko: \n");
                    $hill=(string)readline("umutumba w'amavuko: \n");
                    $com=(string)readline("Ikomine y'amavuko: \n");
                    $pro=(string)readline("Intara y'amavuko: \n");
                    $cni=(string)readline("Nomero ya karangamuntu: \n");

                    //numero kabanga uhabwa
                    $pass=($date*15-2);
                    echo "Mwaronse kabanga yanyu nayo ni: $pass \n";
                    $code=(int)readline("Andika code muhejeje guhabwa: \n\n");
                      
                    //mugihe code ariyo
                        if ($code===$pass) {
                            echo "---------------------------------------------------------------------------------------------------------------------\n";
                            echo "|Izina          |iritazirano       |umwaka         |umutumba       |ikomine      |provensi       |Karangamuntu      |\n";
                            echo "|$name          |$uname            |$date          |$hill          |$com         |$pro           |$cni              |\n";
                            echo "---------------------------------------------------------------------------------------------------------------------\n\n";

                        }
                        else {
                            echo "kabanga yanyu siyo. musabwa gusubiramwo. Murakoze\n";
                        }
                    break;

                case '2':
                    //kuraba ubutunzi
                    $bonus=500;
                    echo "Ntimurashiramwo ubutunzi ariko murafise bonus mwahawe ya $bonus Fbu\n";
                    break;

                case '3':
                    //kubikura amafaranga
                    $withdraw=(int)readline("Andika ayo mubikuye: \n");

                    //mugihe ari musi ya 500
                       if ($withdraw<500) {
                        echo "Ntimushobora kubikura ayari musi y'amajana atanu.";
                        return 0;
                       }
                       else {
                        $code=$withdraw-50;
                        $confirm=(int)readline("emezayo ico giharuro $code: \n");
                           
                        //mugihe code ariyo
                        if ($code===$confirm) {
                            echo "Mwabikuye neza amafaranga $withdraw Fbu kuri compte yanyu. Bandanya mukoresha service zacu.\n";
                        } 
                        else {
                            echo "Igiharuro mwasizeyo sico. Musabwa gusubiramwo!";
                            return 0;
                        }
                    
                       }
                    break;
                    
                case '4':
                    
                    //kurungikira umugenzi
                    $number=(int)readline("Andika inomero: \n");
                    $amount=(int)readline("shiramwo amafaranga: \n");
                      
                    //mugihe ari musi ya 500Fbu
                    if ($amount<500) {
                        echo "Ntimushobora kurungika amafaranga ari musi ya 500Fbu\n";
                        return 0;
                    } 
                    else {
                        $code=$number-61220022;
                        $sent=(int)readline("shiramwo ico giharuro $code: \n");
                       
                        //mugihe code ariyo
                        if ($sent===$sent) {
                            echo "Mwarungikiye $number amafaranga ashika $amount Fbu. Bandanya mukoresha service zacu!\n";
                        } 
                        else {
                            echo "Igiharuro mwashizeyo sico. Musabwe kugerageza.\n";
                            return 0;
                        }
                    }
                    break;  
                    
                case '5':
                    $credit=(int)readline("shiramwo ayo musavye: \n");
                    $number=(int)readline("shiramwo nomero yanyu: \n");
                    $code=$number-$credit-61002200;
                    $expiryDate=Date('d/m/Y', strtotime('+31 days'));
                    $expiryTime=Date("H:i");
                    $confirm=(int)readline("shiramwo ico giharuro $code: \n");

                      //mugihe ayo usavye ari hejuru ya 500Fbu no mugihe code winjije ariyo
                      if ($code===$confirm && $credit>500) {
                        echo "Mwaronse ideni rya $credit Fbu kuri $number muzokoresha gushika $expiryTime $expiryDate . Murakoze\n";
                      } else {
                        echo "amahera ari musi ya 500Fbu canke igiharuro mwashizemwo sico. subiramwo\n";
                        return 0;
                      }
                      
                    break;
                    
                case '6':

                    //menya ibitwerekeye
                    echo "Coilbit n'igisata kibafasha kubika, kubikura no kurungikira amafaranga ku mugenzi mu buryo bwihuse kandi bukingiy. Mufise ico mubaza twandikire kuri 71812038.\n\n";
                    break; 

                default:
                      
                    //mugihe igiharuro wahisemwo kitari muvyo twatanze
                    echo "Ntivyakunze subira mugerageze!!";
                    return 0;
                    break;
            }
            break;

        //Fin kirundi /*Debut Francais */
        
        case '2':
            echo "Bien choisi le francais\n";

            //menu kirundi
            echo "1. Inscription\n";
            echo "2. Compte\n";
            echo "3. Retrait\n";
            echo "4. Envoyer\n";
            echo "5. Credit\n";
            echo "6. Informations\n";

            $menu=(int)readline(" \n");
            switch ($menu) {
                case '1':

                    //ouvrir un compte
                    $creator="kirogodye";
                    $name=(string)readline("Votre nom: \n");
                      if ($name===$creator) {
                        echo "Impossible d'utiliser ce nom\n";
                        return 0;
                    }
                    $uname=(string)readline("votre prenom: \n");
                    $date=(int)readline("Annee de naissance: \n");
                    $hill=(string)readline("Colline de naissance: \n");
                    $com=(string)readline("Commune de naissance: \n");
                    $pro=(string)readline("Province de naissance: \n");
                    $cni=(string)readline("Numero de CNI: \n");

                    //mot de passe par defaut
                    $pass=($date*15-2);
                    echo "Mot de passe par defaut est: $pass \n";
                    $code=(int)readline("Entrer ce mot de passe: \n\n");
                      
                    //si le mot de passe est correcte
                        if ($code===$pass) {
                            echo "---------------------------------------------------------------------------------------------------------------------\n";
                            echo "|Nom            |Prenom            |Annee          |colline        |Commune      |Province       |CNI            |\n";
                            echo "|$name          |$uname            |$date          |$hill          |$com         |$pro           |$cni           |\n";
                            echo "---------------------------------------------------------------------------------------------------------------------\n\n";

                        }
                        else {
                            echo "Votre mot de passe est incorrecte. Veuillez retaper encore\n";
                        }
                    break;

                case '2':

                    //verifier le solde
                    $bonus=500;
                    echo "Vous avez seulement $bonus Fbu de bonus parceque aucun depot fait sur votre compte\n";
                    break;

                case '3':
                    //retirer de l'argent
                    $withdraw=(int)readline("Entrer le solde: \n");

                    //si le solde est moins de 500Fbu
                       if ($withdraw<500) {
                        echo "Impossible de retirer moins de 500Fbu. Merci\n";
                        return 0;
                       }
                       else {
                        $code=$withdraw-50;
                        $confirm=(int)readline("ENtrer  $code: \n");
                           
                        //si le code=code tape
                        if ($code===$confirm) {
                            echo "Le retrait de $withdraw est fait sur votre compte. Merci!\n";
                        } 
                        else {
                            echo "Le code est incorrecte!";
                            return 0;
                        }
                    
                       }
                    break;
                    
                case '4':
                    
                    //Envoyer de l'argent
                    $number=(int)readline("Entrer le numero: \n");
                    $amount=(int)readline("Entrer le solde: \n");
                      
                    //si le solde est moins de 500Fbu
                    if ($amount<500) {
                        echo "Impossible d'envoyer moins de 500Fbu\n";
                        return 0;
                    } 
                    else {
                        $code=$number-61220022;
                        $sent=(int)readline("Entrer ce code $code: \n");
                       
                        //si le code est correcte 
                        if ($sent===$code) {
                            echo "Le solde de $amount est envoye a ce numero $number avec succes! Merci\n";
                        } 
                        else {
                            echo "Le code est incorrecte.\n";
                            return 0;
                        }
                    }
                    break;  
                    
                case '5':
                    $credit=(int)readline("Entrer le credit: \n");
                    $number=(int)readline("votre numero: \n");
                    $code=$number-$credit-61002200;
                    $confirm=(int)readline("Entrer ce code $code: \n");

                      //si le solde est >=500 et le code est correcte
                      if ($code===$confirm && $credit>500) {
                        echo "Votre compte  de numero $number est credite $credit. Merci\n";
                      } else {
                        echo "Invalid code ou bien le solde est moins de 500FBu\n";
                        return 0;
                      }
                      
                    break;
                    
                case '6':

                    //Informations sur nous
                    echo "Coilbit est un service qui facilite les peuples burundais de faire de retrait, de depot, d'envoyer facilement l'argent en une seconde est en securite. Pour plus d'informations veuillez nous appeller sur ce numero 71812038\n\n";
                    break; 

                default:
                      
                    //invalid
                    echo "Introuvable!!";
                    return 0;
                    break;
            }
            break;
        
        //End of french /** Begin of ENglish */
        case '3':
            echo "You are choose English\n";

            //menu kirundi
            echo "1. Sign up\n";
            echo "2. Account\n";
            echo "3. Withdraw\n";
            echo "4. Send\n";
            echo "5. Credit\n";
            echo "6. Informations of us\n";

            $menu=(int)readline(" \n");
            switch ($menu) {
                case '1':

                    //sign up for news account
                    $creator="kirogodye";
                    $name=(string)readline("Your name: \n");
                      if ($name===$creator) {
                        echo "Impossible to us this name\n";
                        return 0;
                    }
                    $uname=(string)readline("Username: \n");
                    $date=(int)readline("year of birth: \n");
                    $hill=(string)readline("Hill of birth: \n");
                    $com=(string)readline("Commune of birth: \n");
                    $pro=(string)readline("Province of birth: \n");
                    $cni=(string)readline("Number of National Card: \n");

                    //default password
                    $pass=($date*15-2);
                    echo "Your default password is $pass \n";
                    $code=(int)readline("Enter password  you got: \n\n");
                      
                    //if the password is true
                        if ($code===$pass) {
                            echo "---------------------------------------------------------------------------------------------------------------------\n";
                            echo "|Name           |Username          |Year           |Hill           |Commune      |Province       |National card     |\n";
                            echo "|$name          |$uname            |$date          |$hill          |$com         |$pro           |$cni              |\n";
                            echo "---------------------------------------------------------------------------------------------------------------------\n\n";

                        }
                        else {
                            echo "worng password. Try again\n";
                        }
                    break;

                case '2':
                    //See amount
                    $bonus=500;
                    echo "Any depot has been effect to your account but you have a bonus of $bonusFbu. Thanks!\n";
                    break;

                case '3':
                    //Withdraw money
                    $withdraw=(int)readline("Enter amount: \n");

                    //mugihe ari musi ya 500
                       if ($withdraw<500) {
                        echo "You cannot withdraw money inferior of 500Fbu.";
                        return 0;
                       }
                       else {
                        $code=$withdraw-50;
                        $confirm=(int)readline("Enter this code $code: \n");
                           
                        //if code is good or correct
                        if ($code===$confirm) {
                            echo "You have been withdraw $withdraw Fbu to your account continue to use our service. Thanks\n";
                        } 
                        else {
                            echo "Wrong password, please try again!";
                            return 0;
                        }
                    
                       }
                    break;
                    
                case '4':
                    
                    //send to your freinds
                    $number=(int)readline("His/her number: \n");
                    $amount=(int)readline("Amount to send: \n");
                      
                    //if is inferior of 500Fbu
                    if ($amount<500) {
                        echo "You cannot send that amount\n";
                        return 0;
                    } 
                    else {
                        $code=$number-61220022;
                        $sent=(int)readline("Enter this code $code: \n");
                       
                        //if code is true
                        if ($sent===$sent) {
                            echo "Amount of $amount just sent to $number. Continue to use ours services!\n";
                        } 
                        else {
                            echo "Wrong password.\n";
                            return 0;
                        }
                    }
                    break;  
                    
                case '5':
                    
                    //ask credit
                    $credit=(int)readline("Amount of credit: \n");
                    $number=(int)readline("Enter your number: \n");
                    $code=$number-$credit-61002200;
                    $confirm=(int)readline("Enter this code $code: \n");

                      //if code is true and amount are high or equals 500Fbu
                      if ($code===$confirm && $credit>500) {
                        echo "Your account has been credited $credit to your number $number. Continue to use ours services!\n";
                      } else {
                        echo "Wrong password or amount is invalid\n";
                        return 0;
                      }
                      
                    break;
                    
                case '6':

                    //know us 
                    echo "Coilbit is a service that help mores burundians to send, depot, withdraw money to theirs accounts in few munites and in security. For mores informations call us to this number 71812038.\n\n";
                    break; 

                default:
                      
                    //invalid choose
                    echo "Invalid!!";
                    return 0;
                    break;
            }
            break;
        
            // invalid language
        default:
            echo 'Invalid!';
            return 0;
            break;
    }
?>
