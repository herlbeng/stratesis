<?php $__env->startSection('content'); ?>
<div class="page-header">
  <h1 class="page-title font_lato">Tabs &amp; Accordions </h1>
  <div class="page-header-actions">
	<ol class="breadcrumb">
		<li><a href="<?php echo e(URL::to('/dashboard')); ?>"><?php echo e(trans('app.home')); ?></a></li>
		<li class="active">Tabs &amp; Accordions</li>
	</ol>
  </div>
</div> 
 <div class="page-content container-fluid">
      <!-- Panel Tabs -->
      <div class="panel">
        <div class="panel-heading">
          <h3 class="panel-title">Tabs</h3>
        </div>
        <div class="panel-body container-fluid">
          <div class="row row-lg">
            <div class="col-lg-6">
              <!-- Example Tabs -->
              <div class="example-wrap">
                <div class="nav-tabs-horizontal">
                  <ul class="nav nav-tabs" data-plugin="nav-tabs" role="tablist">
                    <li class="active" role="presentation"><a data-toggle="tab" href="#exampleTabsOne" aria-controls="exampleTabsOne"
                      role="tab">Home</a></li>
                    <li role="presentation"><a data-toggle="tab" href="#exampleTabsTwo" aria-controls="exampleTabsTwo"
                      role="tab">Components</a></li>
                    <li role="presentation"><a data-toggle="tab" href="#exampleTabsThree" aria-controls="exampleTabsThree"
                      role="tab">Css</a></li>
                    <li role="presentation"><a data-toggle="tab" href="#exampleTabsFour" aria-controls="exampleTabsFour"
                      role="tab">Javascript</a></li>
                    <li class="dropdown" role="presentation">
                      <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                        <span class="caret"></span>Menu </a>
                      <ul class="dropdown-menu" role="menu">
                        <li class="active" role="presentation"><a data-toggle="tab" href="#exampleTabsOne" aria-controls="exampleTabsOne"
                          role="tab">Home</a></li>
                        <li role="presentation"><a data-toggle="tab" href="#exampleTabsTwo" aria-controls="exampleTabsTwo"
                          role="tab">Components</a></li>
                        <li role="presentation"><a data-toggle="tab" href="#exampleTabsThree" aria-controls="exampleTabsThree"
                          role="tab">Css</a></li>
                        <li role="presentation"><a data-toggle="tab" href="#exampleTabsFour" aria-controls="exampleTabsFour"
                          role="tab">Javascript</a></li>
                      </ul>
                    </li>
                  </ul>
                  <div class="tab-content padding-top-20">
                    <div class="tab-pane active" id="exampleTabsOne" role="tabpanel">
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Neglegentur sabinum instructus
                      fingitur accusantibus harum neque consuetudine intereant
                      numeris, ipse tuemur suum apud mediocrem iactant. Libidinibus
                      amatoriis dicta albuci manum, statue.
                    </div>
                    <div class="tab-pane" id="exampleTabsTwo" role="tabpanel">
                      Negant parvos fructu nostram mutans supplicii ac dissentias, maius tibi licebit
                      ruinae philosophia. Salutatus repellere titillaret expetendum
                      ipsi. Cupiditates intellegam exercitumque privatio concederetur,
                      sempiternum, verbis malint dissensio nullas noctesque earumque.
                    </div>
                    <div class="tab-pane" id="exampleTabsThree" role="tabpanel">
                      Benivole horrent tantalo fuisset adamare fugiendam tractatos indicaverunt animis
                      chaere, brevi minuendas, ubi angoribus iisque deorsum audita
                      haec dedocendi utilitas. Panaetium erimus platonem varias
                      imperitos animum, iudiciorumque operis multa disputando.
                    </div>
                    <div class="tab-pane" id="exampleTabsFour" role="tabpanel">
                      Metus subtilius texit consilio fugiendam, opinionum levius amici inertissimae pecuniae
                      tribus ordiamur, alienus artes solitudo, minime praesidia
                      proficiscuntur reiciat detracta involuta veterum. Rutilius
                      quis honestatis hominum, quisquis percussit sibi explicari.
                    </div>
                  </div>
                </div>
              </div>
              <!-- End Example Tabs -->
            </div>
            <div class="col-lg-6">
              <!-- Example Tabs Reverse -->
              <div class="example-wrap">
                <div class="nav-tabs-horizontal">
                  <ul class="nav nav-tabs nav-tabs-reverse" data-plugin="nav-tabs" role="tablist">
                    <li class="active" role="presentation"><a data-toggle="tab" href="#exampleTabsReverseOne" aria-controls="exampleTabsReverseOne"
                      role="tab">Home</a></li>
                    <li role="presentation"><a data-toggle="tab" href="#exampleTabsReverseTwo" aria-controls="exampleTabsReverseTwo"
                      role="tab">Components</a></li>
                    <li role="presentation"><a data-toggle="tab" href="#exampleTabsReverseThree" aria-controls="exampleTabsReverseThree"
                      role="tab">Css</a></li>
                    <li role="presentation"><a data-toggle="tab" href="#exampleTabsReverseFour" aria-controls="exampleTabsReverseFour"
                      role="tab">Javascript</a></li>
                    <li class="dropdown" role="presentation">
                      <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                        <span class="caret"></span>Dropdown </a>
                      <ul class="dropdown-menu" role="menu">
                        <li class="active" role="presentation"><a data-toggle="tab" href="exampleTabsReverseOne" aria-controls="exampleTabsReverseOne"
                          role="tab">Home</a></li>
                        <li role="presentation"><a data-toggle="tab" href="#exampleTabsReverseTwo" aria-controls="exampleTabsReverseTwo"
                          role="tab">Components</a></li>
                        <li role="presentation"><a data-toggle="tab" href="#exampleTabsReverseThree" aria-controls="exampleTabsReverseThree"
                          role="tab">Css</a></li>
                        <li role="presentation"><a data-toggle="tab" href="#exampleTabsReverseFour" aria-controls="exampleTabsReverseFour"
                          role="tab">Javascript</a></li>
                      </ul>
                    </li>
                  </ul>
                  <div class="tab-content padding-top-20">
                    <div class="tab-pane active" id="exampleTabsReverseOne" role="tabpanel">
                      Imperii discedere optio meminerit cumanum sis, delectu, probantur homine iactare
                      fortasse, explicatis possumus discere sumitur istis verterunt
                      dolor, procedat difficilem odio augeri ipsi. Tantopere urbanitas
                      levamur magnam timeam impediri oblivione.
                    </div>
                    <div class="tab-pane" id="exampleTabsReverseTwo" role="tabpanel">
                      Habet qua, omnia mundus sequi pondere horrida ponendam, multavit neglexerit dissentientium
                      consuetudinum seditione fecit pecuniae temeritas interesset,
                      censes accessio fortibus dicturam tenebo respirare laudantium
                      nostros constituamus, incidant fictae incorrupte. Bonorum.
                    </div>
                    <div class="tab-pane" id="exampleTabsReverseThree" role="tabpanel">
                      Defensa spe cura exorsus difficile maiorum amicorum ergo. Sequi ignavi degendae
                      labefactetur attulit fingitur, nullas, aetatis hinc maximeque.
                      Protervi nivem negarent rationis alia delapsa p finiri. Doloris.
                      Dici sentire inmensae.
                    </div>
                    <div class="tab-pane" id="exampleTabsReverseFour" role="tabpanel">
                      Plena quidque diuturnitatem, perpessio quam detrimenti. Poetis, multi sole putemus
                      prorsus, deorsum recusandae. De veniat animi. Deterritum
                      eorumque sibi constituant legatis. Tranquilli intellegebat
                      dissentientium contereret dissentientium. Explicatis tibique
                      sane fecisse.
                    </div>
                  </div>
                </div>
              </div>
              <!-- End Example Tabs Reverse -->
            </div>
          </div>
          <div class="row row-lg">
            <div class="col-lg-6">
              <!-- Example Tabs Left -->
              <div class="example-wrap">
                <div class="nav-tabs-vertical">
                  <ul class="nav nav-tabs margin-right-25" data-plugin="nav-tabs" role="tablist">
                    <li class="active" role="presentation"><a data-toggle="tab" href="#exampleTabsLeftOne" aria-controls="exampleTabsLeftOne"
                      role="tab">Home</a></li>
                    <li role="presentation"><a data-toggle="tab" href="#exampleTabsLeftTwo" aria-controls="exampleTabsLeftTwo"
                      role="tab">Components</a></li>
                    <li role="presentation"><a data-toggle="tab" href="#exampleTabsLeftThree" aria-controls="exampleTabsLeftThree"
                      role="tab">Css</a></li>
                    <li role="presentation"><a data-toggle="tab" href="#exampleTabsLeftFour" aria-controls="exampleTabsLeftFour"
                      role="tab">Javascript</a></li>
                  </ul>
                  <div class="tab-content padding-vertical-15">
                    <div class="tab-pane active" id="exampleTabsLeftOne" role="tabpanel">
                      Puto loqueretur maxime tuentur statuam quanta quamquam multoque cogitavisse, romano
                      continens repellat omnis liquidae, inveneris aegritudine
                      inesse dirigentur graece secundum ipso unam, cognitionis
                      isdem mortem tantis opibus turma virtus legum, procedat accusantium
                      ipse sine fuissent desideraturam. Naturalem virtutum familiari
                      nasci tenebo provident convincere. Senserit ultima faciam
                      deterius plurimum ornateque curiosi. Oratione sit, dices
                      malunt quibusdam. Distinguique parendum contentam graecam
                      sale.
                    </div>
                    <div class="tab-pane" id="exampleTabsLeftTwo" role="tabpanel">
                      Quaerat delectus arte exhorrescere summum disputando agatur perfunctio, e videntur
                      repellere errorem opinor facete invidi perspici simul liberos,
                      inhumanus. Fingitur iudico simulent polyaeno conclusionemque
                      atomis placatae solido etiam, optinere defenditur libero
                      consequentis aristoteli scribentur curis iudicium divinum.
                      Nostros pertineant, concederetur moveat laborum caeco secutus
                      rectas. Dignitatis tranquillitate negant utilior, approbantibus
                      polyaeno malint ullo vide. Possum sane confidam cogitavisse.
                      Sumitur. Diis.
                    </div>
                    <div class="tab-pane" id="exampleTabsLeftThree" role="tabpanel">
                      Chrysippe rebus institutionem utrisque dixisset manus quippiam ignorare defatigatio
                      doctiores, essent doctus ipsam tamquam complexiones corporisque,
                      ars umbram sentiri venandi. Ipsam. Reprehenderit tantum debent
                      sicine assumenda comprobavit, assumenda primos fuerit atomos
                      amicorum inducitur quaedam miserum, potitur numquid effluere
                      haeret ipsos consuetudine, munere putet fugiendis orationis
                      quantumcumque. Perferendis attento saluti liberatione contra,
                      constituam efficeret quaeso accusamus quieti petat rem nisi
                      amicum.
                    </div>
                    <div class="tab-pane" id="exampleTabsLeftFour" role="tabpanel">
                      Laudabilis. At artes audiebamus firmam discordiae potione albam ferantur, epicureum
                      loquerer videretur formidinum utrisque simulent postremo,
                      praesidia variari fecerit ferantur. Hominibus doctissimos
                      multi, ferentur, certissimam medicorum bonum iucundius depravare
                      facile. Degendae istius perfunctio quisquis ordinem ornatum,
                      praeda atomi degendae animus. Mens eximiae placuit terrore,
                      sollicitant efficeret audeam tantalo, vulgo laudantium evertitur
                      spe meminerunt timentis populo, senserit inprobitas facilius
                      referri consiliisque.
                    </div>
                  </div>
                </div>
              </div>
              <!-- End Example Tabs Left -->
            </div>
            <div class="col-lg-6">
              <!-- Example Tabs Right -->
              <div class="example-wrap">
                <div class="nav-tabs-vertical">
                  <ul class="nav nav-tabs nav-tabs-reverse margin-left-25" data-plugin="nav-tabs"
                  role="tablist">
                    <li class="active" role="presentation"><a data-toggle="tab" href="#exampleTabsRightOne" aria-controls="exampleTabsRightOne"
                      role="tab">Home</a></li>
                    <li role="presentation"><a data-toggle="tab" href="#exampleTabsRightTwo" aria-controls="exampleTabsRightTwo"
                      role="tab">Components</a></li>
                    <li role="presentation"><a data-toggle="tab" href="#exampleTabsRightThree" aria-controls="exampleTabsRightThree"
                      role="tab">Css</a></li>
                    <li role="presentation"><a data-toggle="tab" href="#exampleTabsRightFour" aria-controls="exampleTabsRightFour"
                      role="tab">Javascript</a></li>
                  </ul>
                  <div class="tab-content padding-vertical-15">
                    <div class="tab-pane active" id="exampleTabsRightOne" role="tabpanel">
                      Amputata tollit potiora iniuria falli scilicet dissentiet, adversarium consule
                      patiatur iracundia incurrunt latina fit locos movere mererer,
                      deterret quaeritur metuque suum nimium rebus perfunctio.
                      Physici malunt, fuit videntur facillimis remotis corrigere
                      cumque bonum moveat expetitur infimum, corrumpit solam usu
                      eoque, futuris insitam irridente nescius leguntur carere
                      corporis quoddam, maledicta audivi eveniet inquam deterret
                      suspicio exhorrescere despicationes victi. Veterum auctori
                      sapienter.
                    </div>
                    <div class="tab-pane" id="exampleTabsRightTwo" role="tabpanel">
                      Instituit nobis perspicuum sollicitant intellegi noris dicitis latine difficile
                      viderer, perpessio reddidisti sanguinem nulli. Scipio, huic
                      quaeritur persequeretur modis lictores patria dubio derepta
                      verterunt, scriptorem sint certae convenire modo indignae,
                      attulit exercitationem ignavi, expectamus, officia aristoteli
                      nunc. Per clamat firmitatem ornatum. Beatae ingeniis amputata
                      claudicare conversam latine, industria reprehenderit complectitur
                      inciderit utilior, paratus prosperum ullus argumentandum
                      latinas terroribus chrysippo, pertineant.
                    </div>
                    <div class="tab-pane" id="exampleTabsRightThree" role="tabpanel">
                      Mox clarorum disciplinam andriam derigatur secunda, timeret, parum p iucundum talem
                      sequitur, inprobis debilitati pariter sinit facere motu percipit
                      maledici opus. Gessisse quibusdam dubitat didicisset pellat
                      mente conferebamus natura, dubium tu huic. Malis mortis etsi
                      puto ante, adversantur hausta inciderint, logikh ordiamur
                      contentiones illi acute suum conformavit, iucunditas iis
                      leviora muniti exercitationem partus quibus video idcirco
                      familias, domo docet beate.
                    </div>
                    <div class="tab-pane" id="exampleTabsRightFour" role="tabpanel">
                      Quales, legendus consecutionem utrisque dominorum minime indignae exquirere bonae
                      esset vim, graece distrahi scribimus perpaulum pariter parta
                      aliquod, doloris conducunt sensum suam. Adest succumbere
                      appetendum andriam nascuntur. Scripserit deleniti honoris
                      philosophorum exaudita omnem alias. Potuimus. Medeam doceat
                      capti necessariae effugiendorum formidines contineri bono
                      fabulas incorruptis, nullo neglexerit quietae erigimur illis
                      insitam simulent quaerendum, perciperet, dicemus omnino ius
                      hanc, impetum reprehendunt.
                    </div>
                  </div>
                </div>
              </div>
              <!-- End Example Tabs Right -->
            </div>
          </div>
          <div class="row row-lg">
            <div class="col-lg-6">
              <!-- Example Tabs Icon -->
              <div class="example-wrap">
                <div class="nav-tabs-horizontal">
                  <ul class="nav nav-tabs" data-plugin="nav-tabs" role="tablist">
                    <li class="active" role="presentation"><a data-toggle="tab" href="#exampleTabsIconOne" aria-controls="exampleTabsIconOne"
                      role="tab"><i class="icon wb-home margin-0" aria-hidden="true"></i></a></li>
                    <li role="presentation"><a data-toggle="tab" href="#exampleTabsIconTwo" aria-controls="exampleTabsIconTwo"
                      role="tab"><i class="icon wb-settings margin-0" aria-hidden="true"></i></a></li>
                    <li role="presentation"><a data-toggle="tab" href="#exampleTabsIconThree" aria-controls="exampleTabsIconThree"
                      role="tab"><i class="icon wb-star margin-0" aria-hidden="true"></i></a></li>
                    <li role="presentation"><a data-toggle="tab" href="#exampleTabsIconFour" aria-controls="exampleTabsIconFour"
                      role="tab"><i class="icon wb-cloud margin-0" aria-hidden="true"></i></a></li>
                  </ul>
                  <div class="tab-content padding-top-15">
                    <div class="tab-pane active" id="exampleTabsIconOne" role="tabpanel">
                      Fruenda stabilique contumeliae erga inpendente nostros morbi, fugiendus modo cumanum,
                      possit sicut orestem iucunde appetere expetendum platonem,
                      manu nisi orestem discordiae. Aliud efficiat putat accusantium
                      acuti e didicisse cernantur optimum.
                    </div>
                    <div class="tab-pane" id="exampleTabsIconTwo" role="tabpanel">
                      Iucunde restincto corrupti locos sane totam contrariis, putas quaerimus, aequo
                      grate dissentiet disseruerunt epicureum, modo adipisci contemnentes
                      legam istius maximam, virtute torquentur multam, habemus
                      integris morbos tradunt suppetet animis detracta.
                    </div>
                    <div class="tab-pane" id="exampleTabsIconThree" role="tabpanel">
                      Quarum eloquentiam, aperta. Hominibus adipiscuntur. Firme graecis doloris liberabuntur
                      sensum recteque declarant. Aiunt, fore tranquillae dicitis
                      necessariae, chorusque periculis libenter constituamus aspernandum
                      ait chaere, cogitemus, quisquis omnia genuit has hae.
                    </div>
                    <div class="tab-pane" id="exampleTabsIconFour" role="tabpanel">
                      Excepturi causae, cepisse meliore quanta consectetur aliqua attulit aperiri. Dissentiet
                      sicine civibus, l, certissimam animos amet consequatur amicos
                      si. Albam. Amicitias depravata istis depravatum quas reliqui
                      iactant convincere alios euripidis.
                    </div>
                  </div>
                </div>
              </div>
              <!-- End Example Tabs Icon -->
            </div>
            <div class="col-lg-6">
              <!-- Example Tabs Icon Left -->
              <div class="example-wrap">
                <div class="nav-tabs-vertical">
                  <ul class="nav nav-tabs margin-right-25" data-plugin="nav-tabs" role="tablist">
                    <li class="active" role="presentation"><a data-toggle="tab" href="#exampleTabsIconLeftOne" aria-controls="exampleTabsIconLeftOne"
                      role="tab"><i class="icon wb-home margin-0" aria-hidden="true"></i></a></li>
                    <li role="presentation"><a data-toggle="tab" href="#exampleTabsIconLeftTwo" aria-controls="exampleTabsIconLeftTwo"
                      role="tab"><i class="icon wb-settings margin-0" aria-hidden="true"></i></a></li>
                    <li role="presentation"><a data-toggle="tab" href="#exampleTabsIconLeftThree" aria-controls="exampleTabsIconLeftThree"
                      role="tab"><i class="icon wb-star margin-0" aria-hidden="true"></i></a></li>
                    <li role="presentation"><a data-toggle="tab" href="#exampleTabsIconLeftFour" aria-controls="exampleTabsIconLeftFour"
                      role="tab"><i class="icon wb-cloud margin-0" aria-hidden="true"></i></a></li>
                  </ul>
                  <div class="tab-content padding-vertical-15">
                    <div class="tab-pane active" id="exampleTabsIconLeftOne" role="tabpanel">
                      Disseruerunt aiebat veterum universas politus corrigere pacto disputata, sabinum
                      officia, status latinas monet optari quid animi arbitratu,
                      inveniri caritatem adhibuit, putamus, electis parabilis nutu
                      unam claris magna locum disputatum, tenuit gymnasia scripserit
                      praetereat exedunt cyrenaicos reformidans. Aliquem, profecto
                      has perpetiuntur industriae liberalitati, prorsus bona, ullus
                      faciendumve ennii. Dein aperiam romanum conspectum complectitur
                      mala, fonte late quorum, commenticiam initiis incidant.
                    </div>
                    <div class="tab-pane" id="exampleTabsIconLeftTwo" role="tabpanel">
                      Utrumvis angore, laudatur eligendi damna tanta ultimum quidque. Data philosophis
                      efficitur. Etsi apte deorsum tradidisse. Excepturi sublatum
                      viros rerum alias ii peccant, ferre facillimis, iucundum
                      veniam natus quaeritur incursione vestrae comit ignaviamque,
                      tria fructuosam acutum secunda perveniri levis posteri vendibiliora
                      nullam. Probes cui appetendi causas, attico familiari rem
                      tempus cn torquatum. Officia expetendis et stultus pervenias
                      stabilique arbitrium, numeranda.
                    </div>
                    <div class="tab-pane" id="exampleTabsIconLeftThree" role="tabpanel">
                      Similique corporisque. Vitam erga videmus. Comparandae fecit. Arbitrarer cives
                      redeamus dein corpus poetae laborum intellegamus tibique,
                      numen acute congressus soluta acutus tradere deserunt confidet
                      iudicium, angusta, voluit discordans umquam arbitrantur,
                      amatoriis quem inportuno distinguique. Istae, referri. Intellegimus
                      dare hac facerem summam quo peccant maluisset earum, mel
                      graeca constituamus provident amicitiae. Mollitia plane,
                      doleamus defuturum ab plerique intellegimus erigimur fictae.
                    </div>
                    <div class="tab-pane" id="exampleTabsIconLeftFour" role="tabpanel">
                      Consulatu sequimur persecuti quietus aristippi propter afflueret, quibusdam congressus
                      neglegentur delectu optimus exeduntur aliquod interesset.
                      Quaeque postea ceterorum incurreret copulatas quos. Minuit
                      dicunt torquatum illum libero perfecto illustribus, eximiae
                      quidam quales praesentium turpis illustribus utinam assidua,
                      eaque dicenda, faciunt iudicari fore sint percipiatur vivere
                      vexetur, cuiquam num alios malle vitiis gravissimo nulla,
                      natus lucilius possim indignius. Fortibus ait, accuratius.
                    </div>
                  </div>
                </div>
              </div>
              <!-- End Example Tabs Icon Left -->
            </div>
          </div>
          <div class="row row-lg">
            <div class="col-lg-6">
              <!-- Example Tabs Solid -->
              <div class="example-wrap">
                <div class="nav-tabs-horizontal">
                  <ul class="nav nav-tabs nav-tabs-solid" data-plugin="nav-tabs" role="tablist">
                    <li class="active" role="presentation"><a data-toggle="tab" href="#exampleTabsSolidOne" aria-controls="exampleTabsSolidOne"
                      role="tab">Home</a></li>
                    <li role="presentation"><a data-toggle="tab" href="#exampleTabsSolidTwo" aria-controls="exampleTabsSolidTwo"
                      role="tab">Components</a></li>
                    <li role="presentation"><a data-toggle="tab" href="#exampleTabsSolidThree" aria-controls="exampleTabsSolidThree"
                      role="tab">Css</a></li>
                    <li role="presentation"><a data-toggle="tab" href="#exampleTabsSolidFour" aria-controls="exampleTabsSolidFour"
                      role="tab">Javascript</a></li>
                    <li class="dropdown" role="presentation">
                      <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                        <span class="caret"></span>Dropdown </a>
                      <ul class="dropdown-menu" role="menu">
                        <li class="active" role="presentation"><a data-toggle="tab" href="#exampleTabsSolidOne" aria-controls="exampleTabsSolidOne"
                          role="tab">Home</a></li>
                        <li role="presentation"><a data-toggle="tab" href="#exampleTabsSolidTwo" aria-controls="exampleTabsSolidTwo"
                          role="tab">Components</a></li>
                        <li role="presentation"><a data-toggle="tab" href="#exampleTabsSolidThree" aria-controls="exampleTabsSolidThree"
                          role="tab">Css</a></li>
                        <li role="presentation"><a data-toggle="tab" href="#exampleTabsSolidFour" aria-controls="exampleTabsSolidFour"
                          role="tab">Javascript</a></li>
                      </ul>
                    </li>
                  </ul>
                  <div class="tab-content">
                    <div class="tab-pane active" id="exampleTabsSolidOne" role="tabpanel">
                      Omnisque ius possent effici approbantibus earumque explicabo volunt. Aptissimum
                      video sola divina amputata aliquos amputata, quanti minime
                      quisquis astris depravare. Consecutus tranquilli ille meminit
                      obruamus quas. Triari verbis, aliquos ignavi.
                    </div>
                    <div class="tab-pane" id="exampleTabsSolidTwo" role="tabpanel">
                      Ambigua huc ipsarum similique malis physicis splendide, miser philosophi tria finitum
                      errata hominum emolumento officii explicabo appellantur,
                      suscipiet inciderit spatio, quantumcumque disciplinae maluisti
                      putarent cogitemus. Voluerint adipiscendarum aristotele invidi
                      fructuosam.
                    </div>
                    <div class="tab-pane" id="exampleTabsSolidThree" role="tabpanel">
                      Infimum finibus optimi contentus legendam electram, stabilitas antiquitate easque
                      sicut qualisque, atomus versatur alienae, brute pulcherrimum
                      dividendo miserius utinam directam, omnium laborum. Statue
                      litteras uberiora nescio tribuat, contereret vituperandae,
                      magnam.
                    </div>
                    <div class="tab-pane" id="exampleTabsSolidFour" role="tabpanel">
                      Praeterita conveniunt corrumpit divinum vis exercendi labitur. Feci adquiescere
                      eruditi inquam segniorem tantalo. Appetendi volumus nati,
                      suspicio, maximisque otiosum iudicabit tantalo, requirere,
                      affectus firmissimum pariter instructior laetamur o fautrices
                      imperitos.
                    </div>
                  </div>
                </div>
              </div>
              <!-- End Example Tabs Solid -->
            </div>
            <div class="col-lg-6">
              <!-- Example Tabs Solid Left -->
              <div class="example-wrap">
                <div class="nav-tabs-vertical">
                  <ul class="nav nav-tabs nav-tabs-solid" data-plugin="nav-tabs" role="tablist">
                    <li class="active" role="presentation"><a data-toggle="tab" href="#exampleTabsSolidLeftOne" aria-controls="exampleTabsSolidLeftOne"
                      role="tab">Home</a></li>
                    <li role="presentation"><a data-toggle="tab" href="#exampleTabsSolidLeftTwo" aria-controls="exampleTabsSolidLeftTwo"
                      role="tab">Components</a></li>
                    <li role="presentation"><a data-toggle="tab" href="#exampleTabsSolidLeftThree" aria-controls="exampleTabsSolidLeftThree"
                      role="tab">Css</a></li>
                    <li role="presentation"><a data-toggle="tab" href="#exampleTabsSolidLeftFour" aria-controls="exampleTabsSolidLeftFour"
                      role="tab">Javascript</a></li>
                  </ul>
                  <div class="tab-content">
                    <div class="tab-pane active" id="exampleTabsSolidLeftOne" role="tabpanel">
                      Velit studuisse terentii scientiam pondere intus relinqueret andriam, natum natum
                      mutat gravis cotidieque discenda minima esset vi gravissimis.
                      Offendimur acutum poetae vacuitate intellegaturque primisque
                      atilii probarent, pars plena omittendis.
                    </div>
                    <div class="tab-pane" id="exampleTabsSolidLeftTwo" role="tabpanel">
                      Assiduitas ordinem infinito, ut artis incidunt quanto debilitati patria fungimur
                      protervi, euripidis andriam intellegimus ecce esset consumeret,
                      multi quietus fastidii prima maximeque corrumpit, afferrent,
                      ducimus epicuro multavit maledici dolere.
                    </div>
                    <div class="tab-pane" id="exampleTabsSolidLeftThree" role="tabpanel">
                      Peccandi sinit defendere bono sermo vocent, maius, suppetet plurimum eos scribi
                      aetatis captet nosmet cognitionis dolere o. Percipit interpretaris
                      illud variari censes, gaudemus. Nostris, arguerent vitium
                      timentis arguerent contumeliae.
                    </div>
                    <div class="tab-pane" id="exampleTabsSolidLeftFour" role="tabpanel">
                      Conversa oblivione vocent antiopam omnem quodsi superstitio centurionum, possumus
                      iactare denique quieti deorsum ullo posse, ista obruamus
                      omnisque alios diligant concessum, faciendumve sine causam
                      moribus occultarum via octavio interpretum.
                    </div>
                  </div>
                </div>
              </div>
              <!-- End Example Tabs Solid Left -->
            </div>
          </div>
          <div class="row row-lg">
            <div class="col-lg-6">
              <!-- Example Tabs Line -->
              <div class="example-wrap margin-lg-0">
                <div class="nav-tabs-horizontal">
                  <ul class="nav nav-tabs nav-tabs-line" data-plugin="nav-tabs" role="tablist">
                    <li class="active" role="presentation"><a data-toggle="tab" href="#exampleTabsLineOne" aria-controls="exampleTabsLineOne"
                      role="tab">Home</a></li>
                    <li role="presentation"><a data-toggle="tab" href="#exampleTabsLineTwo" aria-controls="exampleTabsLineTwo"
                      role="tab">Components</a></li>
                    <li role="presentation"><a data-toggle="tab" href="#exampleTabsLineThree" aria-controls="exampleTabsLineThree"
                      role="tab">Css</a></li>
                    <li role="presentation"><a data-toggle="tab" href="#exampleTabsLineFour" aria-controls="exampleTabsLineFour"
                      role="tab">Javascript</a></li>
                    <li class="dropdown" role="presentation">
                      <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                        <span class="caret"></span>Dropdown </a>
                      <ul class="dropdown-menu" role="menu">
                        <li class="active" role="presentation"><a data-toggle="tab" href="#exampleTabsLineOne" aria-controls="exampleTabsLineOne"
                          role="tab">Home</a></li>
                        <li role="presentation"><a data-toggle="tab" href="#exampleTabsLineTwo" aria-controls="exampleTabsLineTwo"
                          role="tab">Components</a></li>
                        <li role="presentation"><a data-toggle="tab" href="#exampleTabsLineThree" aria-controls="exampleTabsLineThree"
                          role="tab">Css</a></li>
                        <li role="presentation"><a data-toggle="tab" href="#exampleTabsLineFour" aria-controls="exampleTabsLineFour"
                          role="tab">Javascript</a></li>
                      </ul>
                    </li>
                  </ul>
                  <div class="tab-content padding-top-20">
                    <div class="tab-pane active" id="exampleTabsLineOne" role="tabpanel">
                      Quoquo timeret omne redeamus ratione monet nosque requietis afferrent iste, pertinerent.
                      Postremo frustra oportet pueriliter finxerat eos offendit
                      fecerint, iudicem quieti scribi animumque pondere ancillae,
                      timeret stoicos iustitia parvam.
                    </div>
                    <div class="tab-pane" id="exampleTabsLineTwo" role="tabpanel">
                      Sole, latinas incurreret optari vivatur, porro delectu epicurus cadere impedit
                      fit ferreum concludaturque varias, omnium gloriosis vivendo
                      via filio contentam expeteretur fonte expectata, quosque
                      praetor quid iucunditatis fortitudinem esse.
                    </div>
                    <div class="tab-pane" id="exampleTabsLineThree" role="tabpanel">
                      Maestitiam quamquam iudicare veterum contineri ipse cognoscerem se omittantur dialectica,
                      dixit poterit nondum tempora corpora claudicare ratione percipitur.
                      Earum comprehenderit laudem platonis allevatio graeci, invidus
                      coercendi valetudinis numen deseruisse.
                    </div>
                    <div class="tab-pane" id="exampleTabsLineFour" role="tabpanel">
                      Adiit optime intemperantiam ostendis doctus brevi provincia suscepi. Eos efficitur
                      inprobis negent turbulenta consentientis ingeniis natura,
                      desperantes quisque concessum theophrasti, torquatus detracto,
                      deinde, intellegentium fruitur errorem nulli vivatur, operis.
                    </div>
                  </div>
                </div>
              </div>
              <!-- End Example Tabs Line -->
            </div>
            <div class="col-lg-6">
              <!-- Example Tabs Line Left -->
              <div class="example-wrap">
                <div class="nav-tabs-vertical">
                  <ul class="nav nav-tabs nav-tabs-line margin-right-25" data-plugin="nav-tabs" role="tablist">
                    <li class="active" role="presentation"><a data-toggle="tab" href="#exampleTabsLineLeftOne" aria-controls="exampleTabsLineLeftOne"
                      role="tab">Home</a></li>
                    <li role="presentation"><a data-toggle="tab" href="#exampleTabsLineLeftTwo" aria-controls="exampleTabsLineLeftTwo"
                      role="tab">Components</a></li>
                    <li role="presentation"><a data-toggle="tab" href="#exampleTabsLineLeftThree" aria-controls="exampleTabsLineLeftThree"
                      role="tab">Css</a></li>
                    <li role="presentation"><a data-toggle="tab" href="#exampleTabsLineLeftFour" aria-controls="exampleTabsLineLeftFour"
                      role="tab">Javascript</a></li>
                  </ul>
                  <div class="tab-content padding-vertical-15">
                    <div class="tab-pane active" id="exampleTabsLineLeftOne" role="tabpanel">
                      Mel, incorruptis confidam derepta inportuno perpetuam placatae. Expetenda summam
                      venandi cotidie euripidis vexetur, scribendi recta fortunam
                      hanc oblivione. Iniuria ipso statuam utrumque asperiores
                      eae cogitemus, evertitur triarium perspexit conclusionemque
                      propterea repellendus agatur scilicet, leniter intervalla
                      nocet praeterierunt tuum privatione, senserit sale vias,
                      delectatum dedecora ratione o religionis derigatur diuturnum
                      arbitrantur conspiratione, legam opera splendore iste democritum
                      apte romanum legum egregios.
                    </div>
                    <div class="tab-pane" id="exampleTabsLineLeftTwo" role="tabpanel">
                      Mnesarchum velit cumanum utuntur tantam deterritum, democritum vulgo contumeliae
                      abest studuisse quanta telos. Inmensae. Arbitratu dixisset
                      invidiae ferre constituto gaudeat contentam, omnium nescius,
                      consistat interesse animi, amet fuisset numen graecos incidunt
                      euripidis praesens, homines religionis dirigentur postulant.
                      Magnum utrumvis gravitate appareat fabulae facio perveniri
                      fruenda indicaverunt texit, frequenter probet diligenter
                      sententia meam distinctio theseo legerint corporis quoquo,
                      optari futurove expedita.
                    </div>
                    <div class="tab-pane" id="exampleTabsLineLeftThree" role="tabpanel">
                      Faciendi denique miserius iudico, significet ingenii adduci angere efficit linguam.
                      Delectatum copulatas solemus tenere legam ignaviamque diis
                      peccant ornamenta videro, adquiescere bonorum quisquam ceramico
                      minime quodsi corporisque. Nostri pauca gravioribus reici
                      solvantur, angoribus naturalem sed epicurei occultum sola
                      institutionem meminerunt quem fonte, confirmat. Cui eodem
                      perspecta vim solis innumerabiles, videatur status qui quanto
                      sapientiam nomini honestum, comit sumitur nati via.
                    </div>
                    <div class="tab-pane" id="exampleTabsLineLeftFour" role="tabpanel">
                      Dicent feramus necesse proficiscuntur libidinem quisquis, petulantes divitias compositis,
                      disseretur voluptates crudeli sustulisti. Hostis res utuntur
                      bono incurrunt navigandi laboribus istae tali, miserum metuamus
                      labor quasi synephebos iudicante. Effecerit sicine falsarum
                      pugnantibus imperitos, vero successionem exhorrescere illis
                      magnopere deteriora maioribus necessariam industria. Illi
                      variari stabilique augendas suscipiet, corrigere conducunt,
                      divinum affecti, eruditus clarorum. Spatio gustare cupiditates
                      desideret aliena sinat utrumque.
                    </div>
                  </div>
                </div>
              </div>
              <!-- End Example Tabs Line Left -->
            </div>
          </div>
        </div>
      </div>
      <!-- End Panel Tabs -->
      <!-- Tabs In Panel -->
      <h4>Tabs With Inverse</h4>
      <div class="row">
        <div class="col-lg-6">
          <!-- Example Tabs Inverse -->
          <div class="example-wrap">
            <div class="nav-tabs-horizontal nav-tabs-inverse">
              <ul class="nav nav-tabs" data-plugin="nav-tabs" role="tablist">
                <li class="active" role="presentation">
                  <a data-toggle="tab" href="#exampleTabsInverseOne" aria-controls="exampleTabsInverseOne"
                  role="tab">
                  The first tab
                </a>
                </li>
                <li role="presentation">
                  <a data-toggle="tab" href="#exampleTabsInverseTwo" aria-controls="exampleTabsInverseTwo"
                  role="tab">
                  The second tab
                </a>
                </li>
              </ul>
              <div class="tab-content padding-20">
                <div class="tab-pane active" id="exampleTabsInverseOne" role="tabpanel">
                  Amicorum doloribus splendido iniuste odio andriam suas andriam scripta posidonium,
                  poetis adolescens incorrupte disserunt eruditionem astris verbis
                  cuius malle quantum, quibusdam iudico perfunctio re, audire menandri
                  quantus occultarum studiis.
                </div>
                <div class="tab-pane" id="exampleTabsInverseTwo" role="tabpanel">
                  Insequitur invidi an sumitur accedere epicurum divina claudicare quiddam, praebeat
                  corporis generis errata tempora latinas possent arare soliditatem
                  desiderare, poterit. Incorrupte, tantas nivem solum frustra saxum
                  tantis litteras accusata.
                </div>
              </div>
            </div>
          </div>
          <!-- End Example Tabs Inverse -->
        </div>
        <div class="col-lg-6">
          <!-- Example Tabs Left Inverse -->
          <div class="example-wrap">
            <div class="nav-tabs-vertical nav-tabs-inverse">
              <ul class="nav nav-tabs" data-plugin="nav-tabs" role="tablist">
                <li class="active" role="presentation">
                  <a data-toggle="tab" href="#exampleTabsLeftInverseOne" aria-controls="exampleTabsLeftInverseOne"
                  role="tab">
                    <i class="icon wb-home margin-0" aria-hidden="true"></i>
                  </a>
                </li>
                <li role="presentation">
                  <a data-toggle="tab" href="#exampleTabsLeftInverseTwo" aria-controls="exampleTabsLeftInverseTwo"
                  role="tab">
                    <i class="icon wb-settings margin-0" aria-hidden="true"></i>
                  </a>
                </li>
                <li role="presentation">
                  <a data-toggle="tab" href="#exampleTabsLeftInverseThree" aria-controls="exampleTabsLeftInverseThree"
                  role="tab">
                    <i class="icon wb-star margin-0" aria-hidden="true"></i>
                  </a>
                </li>
              </ul>
              <div class="tab-content padding-20">
                <div class="tab-pane active" id="exampleTabsLeftInverseOne" role="tabpanel">
                  Ipse honeste propter provincia iudex, eorum perinde brevi macedonum, conferebamus
                  mirari stoicis, centurionum stabilitas sponte. Emancipaverat
                  liberavisse possumus quibusdam disseruerunt percipi non nusquam
                  administrari. Istius cupiditate vestrae addidisti ferri explicatis,
                  senserit dicemus divitiarum. Mel habeat iudicandum ecce. Oratio
                  probarentur reliquisti metu ullo peccant, acutus debeo recta
                  suapte iucunda postulet audita morte, occultum noctesque appellant
                  progrediens viros torquatum potitur intervalla.
                </div>
                <div class="tab-pane" id="exampleTabsLeftInverseTwo" role="tabpanel">
                  Conspiratione, egregios summam gessisse videro amice qui captet, fecit, legendos
                  probo ponderum vult detractio solitudo facete gymnasia defendit
                  triarius. Reliquarum cognitionem noris, regione filium delectu
                  efficiat probaretur, civium vitam beateque eriguntur concursio
                  sapientia seditione misisti allevatio ego. Deorum principes.
                  Delicatissimi inmensae partes facere sentire frequenter pars
                  dedecora gloriatur, pars sapientium cursu possit imperiis homo
                  patrius repellere haec hortensio. Solvantur.
                </div>
                <div class="tab-pane" id="exampleTabsLeftInverseThree" role="tabpanel">
                  Virtutibus effectrices patet splendore confectum assiduitas operam, politus oderis.
                  Cernimus, vexetur approbantibus ne inimicus putavisset magnam
                  finitas. Gloriatur, reperiuntur vim historiae tenuit, cadere,
                  quaerendum albucius tranquilli in interesset praesidia ignoratione
                  ait adiuvet fructuosam, veniam facilis erit optinere aiunt epicuro
                  dissentiunt afferat, molestum quando minimum noster desiderat
                  antiopam igitur indoctum. Audaces antiquitate discedere aequum
                  conflixisse familiarem aliquid, notissima laudandis adiungimus.
                </div>
              </div>
            </div>
          </div>
          <!-- End Example Tabs Left Inverse -->
        </div>
        <div class="clearfix visible-lg-block"></div>
        <div class="col-lg-6">
          <!-- Example Tabs Solid Inverse -->
          <div class="example-wrap">
            <div class="nav-tabs-horizontal nav-tabs-inverse">
              <ul class="nav nav-tabs nav-tabs-solid" data-plugin="nav-tabs" role="tablist">
                <li class="active" role="presentation">
                  <a data-toggle="tab" href="#exampleTabsSolidInverseOne" aria-controls="exampleTabsSolidInverseOne"
                  role="tab">
                  The first tab
                </a>
                </li>
                <li role="presentation">
                  <a data-toggle="tab" href="#exampleTabsSolidInverseTwo" aria-controls="exampleTabsSolidInverseTwo"
                  role="tab">
                  The second tab
                </a>
                </li>
              </ul>
              <div class="tab-content">
                <div class="tab-pane active" id="exampleTabsSolidInverseOne" role="tabpanel">
                  Medium. Disciplina imitarentur orestem refert, quanta stabilem exedunt defuturum
                  discedere poenis iustius primum omnis blanditiis, declinabunt
                  lineam, suscipiet umquam damna respondendum quorum, easque iis
                  videretur finis,blanditiis verentur.
                </div>
                <div class="tab-pane" id="exampleTabsSolidInverseTwo" role="tabpanel">
                  Arbitror nulli fugiat liberos mi aequum epularum praetulerit. Facerem hausta intellegere
                  caret eximiae etiamsi veserim disciplinis iustitia, expetendum
                  credo gloriatur perpetiuntur, fugiendus pleniorem fruentem, necesse
                  pararetur. Et, horreat optimum.
                </div>
              </div>
            </div>
          </div>
          <!-- End Example Tabs Solid Inverse -->
        </div>
        <div class="col-lg-6">
          <!-- Example Tabs Solid Left Inverse -->
          <div class="example-wrap">
            <div class="nav-tabs-vertical nav-tabs-inverse">
              <ul class="nav nav-tabs nav-tabs-solid" data-plugin="nav-tabs" role="tablist">
                <li class="active" role="presentation">
                  <a data-toggle="tab" href="#exampleTabsSolidLeftInverseOne" aria-controls="exampleTabsSolidLeftInverseOne"
                  role="tab">
                    <i class="icon wb-home margin-0" aria-hidden="true"></i>
                  </a>
                </li>
                <li role="presentation">
                  <a data-toggle="tab" href="#exampleTabsSolidLeftInverseTwo" aria-controls="exampleTabsSolidLeftInverseTwo"
                  role="tab">
                    <i class="icon wb-settings margin-0" aria-hidden="true"></i>
                  </a>
                </li>
                <li role="presentation">
                  <a data-toggle="tab" href="#exampleTabsSolidLeftInverseThree" aria-controls="exampleTabsSolidLeftInverseThree"
                  role="tab">
                    <i class="icon wb-star margin-0" aria-hidden="true"></i>
                  </a>
                </li>
              </ul>
              <div class="tab-content">
                <div class="tab-pane active" id="exampleTabsSolidLeftInverseOne" role="tabpanel">
                  Ullus exercendi posidonium fugiendam erat incorruptis rationis. Amet amicis individua
                  ruant, epicurus nomini patriam investigandi. Greges gloriae aetatis.
                  Importari. Maiora incurreret, eius inimicus summo. Inprobitatem
                  scipio, vias assumenda amicitias doloris gloriosis fructu, emolumento
                  fecerint deserere rebus natura, desideret, gratiam aristippi
                  fructuosam facultas multitudinem pronuntiaret quales timeam fit,
                  totus incommoda plurimum amarissimam aetatis cognitioque, grate,
                  eam turpe censet nescio.
                </div>
                <div class="tab-pane" id="exampleTabsSolidLeftInverseTwo" role="tabpanel">
                  Praesidia honestatis. Sitisque disseruerunt desperantes feramus duce quorum conficiuntque
                  insolens, errata dignissimos beatam audiam turpius confidere
                  quale. Brevi quid poterimus aristippus miserius intervalla intereant
                  fautrices. Etiamsi amorem fastidii notae incursione transferam,
                  consequantur transferre molestum reprehensa maledici labefactetur
                  dicebas hoc legum aliam, occulte iisque epularum iste modus disserendum
                  recteque cui, epicuri ennius dignitatis iudicatum beatus aristoteli
                  beata fruitur, postulant.
                </div>
                <div class="tab-pane" id="exampleTabsSolidLeftInverseThree" role="tabpanel">
                  Homine appellant ruant medicorum honestatis, disputationi saluti facerem neglexerit
                  versuum intellegimus, habet vide eos, quando legendos quadam
                  dolores consequi admonere vacuitate quaedam, afficitur postea
                  cognitio omittam sanguinem aequitate iustius deteriora, error
                  rutilius inbecilloque ancillae zenonem conversam omnem, cogitavisse
                  interrogari integris atque e, tota tantis repetitis nos disciplina
                  plus sitisque, intuemur, extremo deteriora. Involuta diligant
                  aequi causa plerique praesertim.
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- End Example Tabs Solid Left Inverse -->
      </div>
      <!-- End Tabs With Inverse -->
      <div class="row">
        <div class="col-sm-6">
          <!-- Example Iconified Tabs -->
          <div class="example-wrap">
            <h4 class="example-title">Iconified Tabs</h4>
            <div class="example">
              <div class="nav-tabs-horizontal nav-tabs-inverse">
                <ul class="nav nav-tabs nav-tabs-solid" data-plugin="nav-tabs" role="tablist">
                  <li class="active" role="presentation">
                    <a data-toggle="tab" href="#exampleIconifiedTabsOne" aria-controls="exampleIconifiedTabsOne"
                    role="tab">
                      <i class="icon wb-user" aria-hidden="true"></i> User
                    </a>
                  </li>
                  <li role="presentation">
                    <a data-toggle="tab" href="#exampleIconifiedTabsTwo" aria-controls="exampleIconifiedTabsTwo"
                    role="tab">
                      <i class="icon wb-plugin" aria-hidden="true"></i> Plugin
                    </a>
                  </li>
                  <li role="presentation">
                    <a data-toggle="tab" href="#exampleIconifiedTabsThree" aria-controls="exampleIconifiedTabsThree"
                    role="tab">
                      <i class="icon wb-settings" aria-hidden="true"></i> Settings
                    </a>
                  </li>
                </ul>
                <div class="tab-content padding-top-15">
                  <div class="tab-pane active" id="exampleIconifiedTabsOne" role="tabpanel">Pariatur cillum id incididunt adipisicing duis culpa. Do anim
                    cupidatat ipsum ut incididunt. Amet dolor reprehenderit velit
                    aliquip proident. Commodo aliquip adipisicing adipisicing pariatur
                    velit eu qui. Cupidatat occaecat mollit proident deserunt.
                    Voluptate cillum eiusmod laboris eiusmod amet. Sit ad commodo
                    minim id deserunt.</div>
                  <div class="tab-pane" id="exampleIconifiedTabsTwo" role="tabpanel">Enim nulla ex nulla deserunt ex. Ad excepteur in occaecat deserunt
                    consequat reprehenderit anim non magna. In minim nostrud tempor
                    laborum cillum quis. Aute laboris ut irure anim. Elit do anim
                    occaecat cillum non aute. Consequat deserunt tempor excepteur
                    nisi irure ad quis proident. Sint enim Lorem duis est fugiat
                    sint.</div>
                  <div class="tab-pane" id="exampleIconifiedTabsThree" role="tabpanel">Quis adipisicing fugiat irure quis velit consectetur. Duis nostrud
                    Lorem proident consectetur. Ex mollit qui exercitation ea proident.
                    Do in sunt qui est. Sint aliqua quis proident dolore ad. Officia
                    sit veniam est do ut. Non id ut do eiusmod ipsum.
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- End Example Iconified Tabs -->
        </div>
        <div class="col-sm-6">
          <!-- Example Closeable Tabs -->
          <div class="example-wrap">
            <h4 class="example-title">Closeable Tabs</h4>
            <div class="example">
              <div class="nav-tabs-horizontal nav-tabs-inverse">
                <ul class="nav nav-tabs nav-tabs-solid" data-plugin="nav-tabs" role="tablist">
                  <li class="active" role="presentation">
                    <a data-toggle="tab" href="#exampleCloseableTabsOne" aria-controls="exampleCloseableTabsOne"
                    role="tab">
                    User
                  </a>
                  </li>
                  <li role="presentation">
                    <a data-toggle="tab" href="#exampleCloseableTabsTwo" aria-controls="exampleCloseableTabsTwo"
                    role="tab">
                      <span class="close" data-close="tab" aria-label="Close">
                        <strong title="true">�</strong>
                      </span>
                      Plugin
                    </a>
                  </li>
                  <li role="presentation">
                    <a data-toggle="tab" href="#exampleCloseableTabsThree" aria-controls="exampleCloseableTabsThree"
                    role="tab">
                      <span class="close" data-close="tab" aria-label="Close">
                        <strong title="true">�</strong>
                      </span>
                      Settings
                    </a>
                  </li>
                </ul>
                <div class="tab-content padding-top-15">
                  <div class="tab-pane active" id="exampleCloseableTabsOne" role="tabpanel">Est aute deserunt officia esse excepteur in. Laboris irure mollit
                    fugiat qui aute magna in. Occaecat dolor amet dolore voluptate
                    ad adipisicing enim. Sit nostrud nisi sint excepteur ipsum
                    aute ad veniam. Nisi quis quis velit adipisicing sunt officia
                    commodo. Aute cillum ut aliquip et non proident qui nulla.
                    Sint in dolore sit esse.</div>
                  <div class="tab-pane" id="exampleCloseableTabsTwo" role="tabpanel">Pariatur minim est incididunt nisi quis. Enim cillum non magna
                    eiusmod. Ipsum fugiat dolor esse ipsum proident qui. Non irure
                    duis irure id sit nostrud reprehenderit laborum. Laborum amet
                    et incididunt cupidatat nostrud. Id labore magna incididunt
                    aliqua. Eu sunt eu proident ex incididunt id culpa ipsum do.
                  </div>
                  <div class="tab-pane" id="exampleCloseableTabsThree" role="tabpanel">Quis est et consectetur qui sint dolor mollit sit. Ex cillum
                    consectetur commodo deserunt non elit. Esse nostrud est deserunt
                    pariatur. Ex mollit officia ipsum esse ut. Ex nisi fugiat deserunt
                    deserunt et eiusmod ullamco. Laboris amet enim magna fugiat
                    excepteur tempor. Consequat consectetur laboris pariatur elit.
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- End Closeable Tabs -->
        </div>
      </div>
      <!-- End Iconified Tabs -->
      <!-- Tab Animation -->
      <h4>Tab Animations</h4>
      <div class="row">
        <div class="col-lg-4 col-md-6">
          <div class="example-wrap">
            <div class="nav-tabs-horizontal nav-tabs-inverse nav-tabs-animate">
              <ul class="nav nav-tabs nav-tabs-solid" data-plugin="nav-tabs" role="tablist">
                <li class="active" role="presentation">
                  <a data-toggle="tab" href="#exampleTabsAnimateSlideLeftOne" aria-controls="exampleTabsAnimateSlideLeftOne"
                  role="tab" aria-expanded="true">
                  Home
                </a>
                </li>
                <li role="presentation" class="">
                  <a data-toggle="tab" href="#exampleTabsAnimateSlideLeftTwo" aria-controls="exampleTabsAnimateSlideLeftTwo"
                  role="tab" aria-expanded="false">
                  Components
                </a>
                </li>
                <li class="" role="presentation">
                  <a data-toggle="tab" href="#exampleTabsAnimateSlideLeftThree" aria-controls="exampleTabsAnimateSlideLeftThree"
                  role="tab" aria-expanded="true">
                  Css
                </a>
                </li>
              </ul>
              <div class="tab-content">
                <div class="tab-pane active animation-slide-left" id="exampleTabsAnimateSlideLeftOne"
                role="tabpanel">
                  Omnisque ius possent effici approbantibus earumque explicabo volunt. Aptissimum
                  video sola divina amputata aliquos amputata, quanti minime quisquis
                  astris depravare. Consecutus tranquilli ille meminit obruamus
                  quas. Triari verbis, aliquos ignavi.
                </div>
                <div class="tab-pane animation-slide-left" id="exampleTabsAnimateSlideLeftTwo"
                role="tabpanel">
                  Ambigua huc ipsarum similique malis physicis splendide, miser philosophi tria finitum
                  errata hominum emolumento officii explicabo appellantur, suscipiet
                  inciderit spatio, quantumcumque disciplinae maluisti putarent
                  cogitemus. Voluerint adipiscendarum aristotele invidi fructuosam.
                </div>
                <div class="tab-pane animation-slide-left" id="exampleTabsAnimateSlideLeftThree"
                role="tabpanel">
                  Infimum finibus optimi contentus legendam electram, stabilitas antiquitate easque
                  sicut qualisque, atomus versatur alienae, brute pulcherrimum
                  dividendo miserius utinam directam, omnium laborum. Statue litteras
                  uberiora nescio tribuat, contereret vituperandae, magnam.
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="example-wrap">
            <div class="nav-tabs-horizontal nav-tabs-inverse nav-tabs-animate">
              <ul class="nav nav-tabs nav-tabs-solid" data-plugin="nav-tabs" role="tablist">
                <li class="active" role="presentation">
                  <a data-toggle="tab" href="#exampleTabsAnimateSlideRightOne" aria-controls="exampleTabsAnimateSlideRightOne"
                  role="tab" aria-expanded="true">
                  Home
                </a>
                </li>
                <li role="presentation" class="">
                  <a data-toggle="tab" href="#exampleTabsAnimateSlideRightTwo" aria-controls="exampleTabsAnimateSlideRightTwo"
                  role="tab" aria-expanded="false">
                  Components
                </a>
                </li>
                <li class="" role="presentation">
                  <a data-toggle="tab" href="#exampleTabsAnimateSlideRightThree" aria-controls="exampleTabsAnimateSlideRightThree"
                  role="tab" aria-expanded="true">
                  Css
                </a>
                </li>
              </ul>
              <div class="tab-content">
                <div class="tab-pane active animation-slide-right" id="exampleTabsAnimateSlideRightOne"
                role="tabpanel">
                  Omnisque ius possent effici approbantibus earumque explicabo volunt. Aptissimum
                  video sola divina amputata aliquos amputata, quanti minime quisquis
                  astris depravare. Consecutus tranquilli ille meminit obruamus
                  quas. Triari verbis, aliquos ignavi.
                </div>
                <div class="tab-pane animation-slide-right" id="exampleTabsAnimateSlideRightTwo"
                role="tabpanel">
                  Ambigua huc ipsarum similique malis physicis splendide, miser philosophi tria finitum
                  errata hominum emolumento officii explicabo appellantur, suscipiet
                  inciderit spatio, quantumcumque disciplinae maluisti putarent
                  cogitemus. Voluerint adipiscendarum aristotele invidi fructuosam.
                </div>
                <div class="tab-pane animation-slide-right" id="exampleTabsAnimateSlideRightThree"
                role="tabpanel">
                  Infimum finibus optimi contentus legendam electram, stabilitas antiquitate easque
                  sicut qualisque, atomus versatur alienae, brute pulcherrimum
                  dividendo miserius utinam directam, omnium laborum. Statue litteras
                  uberiora nescio tribuat, contereret vituperandae, magnam.
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="example-wrap">
            <div class="nav-tabs-horizontal nav-tabs-inverse nav-tabs-animate">
              <ul class="nav nav-tabs nav-tabs-solid" data-plugin="nav-tabs" role="tablist">
                <li class="active" role="presentation">
                  <a data-toggle="tab" href="#exampleTabsAnimateSlideBottomOne" aria-controls="exampleTabsAnimateSlideBottomOne"
                  role="tab" aria-expanded="true">
                  Home
                </a>
                </li>
                <li role="presentation" class="">
                  <a data-toggle="tab" href="#exampleTabsAnimateSlideBottomTwo" aria-controls="exampleTabsAnimateSlideBottomTwo"
                  role="tab" aria-expanded="false">
                  Components
                </a>
                </li>
                <li class="" role="presentation">
                  <a data-toggle="tab" href="#exampleTabsAnimateSlideBottomThree" aria-controls="exampleTabsAnimateSlideBottomThree"
                  role="tab" aria-expanded="true">
                  Css
                </a>
                </li>
              </ul>
              <div class="tab-content">
                <div class="tab-pane active animation-slide-bottom" id="exampleTabsAnimateSlideBottomOne"
                role="tabpanel">
                  Omnisque ius possent effici approbantibus earumque explicabo volunt. Aptissimum
                  video sola divina amputata aliquos amputata, quanti minime quisquis
                  astris depravare. Consecutus tranquilli ille meminit obruamus
                  quas. Triari verbis, aliquos ignavi.
                </div>
                <div class="tab-pane animation-slide-bottom" id="exampleTabsAnimateSlideBottomTwo"
                role="tabpanel">
                  Ambigua huc ipsarum similique malis physicis splendide, miser philosophi tria finitum
                  errata hominum emolumento officii explicabo appellantur, suscipiet
                  inciderit spatio, quantumcumque disciplinae maluisti putarent
                  cogitemus. Voluerint adipiscendarum aristotele invidi fructuosam.
                </div>
                <div class="tab-pane animation-slide-bottom" id="exampleTabsAnimateSlideBottomThree"
                role="tabpanel">
                  Infimum finibus optimi contentus legendam electram, stabilitas antiquitate easque
                  sicut qualisque, atomus versatur alienae, brute pulcherrimum
                  dividendo miserius utinam directam, omnium laborum. Statue litteras
                  uberiora nescio tribuat, contereret vituperandae, magnam.
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="example-wrap">
            <div class="nav-tabs-horizontal nav-tabs-inverse nav-tabs-animate">
              <ul class="nav nav-tabs nav-tabs-solid" data-plugin="nav-tabs" role="tablist">
                <li class="active" role="presentation">
                  <a data-toggle="tab" href="#exampleTabsAnimateSlideTopOne" aria-controls="exampleTabsAnimateSlideTopOne"
                  role="tab" aria-expanded="true">
                  Home
                </a>
                </li>
                <li role="presentation" class="">
                  <a data-toggle="tab" href="#exampleTabsAnimateSlideTopTwo" aria-controls="exampleTabsAnimateSlideTopTwo"
                  role="tab" aria-expanded="false">
                  Components
                </a>
                </li>
                <li class="" role="presentation">
                  <a data-toggle="tab" href="#exampleTabsAnimateSlideTopThree" aria-controls="exampleTabsAnimateSlideTopThree"
                  role="tab" aria-expanded="true">
                  Css
                </a>
                </li>
              </ul>
              <div class="tab-content">
                <div class="tab-pane active animation-slide-top" id="exampleTabsAnimateSlideTopOne"
                role="tabpanel">
                  Omnisque ius possent effici approbantibus earumque explicabo volunt. Aptissimum
                  video sola divina amputata aliquos amputata, quanti minime quisquis
                  astris depravare. Consecutus tranquilli ille meminit obruamus
                  quas. Triari verbis, aliquos ignavi.
                </div>
                <div class="tab-pane animation-slide-top" id="exampleTabsAnimateSlideTopTwo" role="tabpanel">
                  Ambigua huc ipsarum similique malis physicis splendide, miser philosophi tria finitum
                  errata hominum emolumento officii explicabo appellantur, suscipiet
                  inciderit spatio, quantumcumque disciplinae maluisti putarent
                  cogitemus. Voluerint adipiscendarum aristotele invidi fructuosam.
                </div>
                <div class="tab-pane animation-slide-top" id="exampleTabsAnimateSlideTopThree"
                role="tabpanel">
                  Infimum finibus optimi contentus legendam electram, stabilitas antiquitate easque
                  sicut qualisque, atomus versatur alienae, brute pulcherrimum
                  dividendo miserius utinam directam, omnium laborum. Statue litteras
                  uberiora nescio tribuat, contereret vituperandae, magnam.
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="example-wrap">
            <div class="nav-tabs-horizontal nav-tabs-inverse nav-tabs-animate">
              <ul class="nav nav-tabs nav-tabs-solid" data-plugin="nav-tabs" role="tablist">
                <li class="active" role="presentation">
                  <a data-toggle="tab" href="#exampleTabsAnimateScaleUpOne" aria-controls="exampleTabsAnimateScaleUpOne"
                  role="tab" aria-expanded="true">
                  Home
                </a>
                </li>
                <li role="presentation" class="">
                  <a data-toggle="tab" href="#exampleTabsAnimateScaleUpTwo" aria-controls="exampleTabsAnimateScaleUpTwo"
                  role="tab" aria-expanded="false">
                  Components
                </a>
                </li>
                <li class="" role="presentation">
                  <a data-toggle="tab" href="#exampleTabsAnimateScaleupThree" aria-controls="exampleTabsAnimateScaleupThree"
                  role="tab" aria-expanded="true">
                  Css
                </a>
                </li>
              </ul>
              <div class="tab-content">
                <div class="tab-pane active animation-scale-up" id="exampleTabsAnimateScaleUpOne"
                role="tabpanel">
                  Omnisque ius possent effici approbantibus earumque explicabo volunt. Aptissimum
                  video sola divina amputata aliquos amputata, quanti minime quisquis
                  astris depravare. Consecutus tranquilli ille meminit obruamus
                  quas. Triari verbis, aliquos ignavi.
                </div>
                <div class="tab-pane animation-scale-up" id="exampleTabsAnimateScaleUpTwo" role="tabpanel">
                  Ambigua huc ipsarum similique malis physicis splendide, miser philosophi tria finitum
                  errata hominum emolumento officii explicabo appellantur, suscipiet
                  inciderit spatio, quantumcumque disciplinae maluisti putarent
                  cogitemus. Voluerint adipiscendarum aristotele invidi fructuosam.
                </div>
                <div class="tab-pane animation-scale-up" id="exampleTabsAnimateScaleupThree" role="tabpanel">
                  Infimum finibus optimi contentus legendam electram, stabilitas antiquitate easque
                  sicut qualisque, atomus versatur alienae, brute pulcherrimum
                  dividendo miserius utinam directam, omnium laborum. Statue litteras
                  uberiora nescio tribuat, contereret vituperandae, magnam.
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="example-wrap">
            <div class="nav-tabs-horizontal nav-tabs-inverse nav-tabs-animate">
              <ul class="nav nav-tabs nav-tabs-solid" data-plugin="nav-tabs" role="tablist">
                <li class="active" role="presentation">
                  <a data-toggle="tab" href="#exampleTabsAnimateFadeOne" aria-controls="exampleTabsAnimateFadeOne"
                  role="tab" aria-expanded="true">
                  Home
                </a>
                </li>
                <li role="presentation" class="">
                  <a data-toggle="tab" href="#exampleTabsAnimateFadeTwo" aria-controls="exampleTabsAnimateFadeTwo"
                  role="tab" aria-expanded="false">
                  Components
                </a>
                </li>
                <li class="" role="presentation">
                  <a data-toggle="tab" href="#exampleTabsAnimateFadeThree" aria-controls="exampleTabsAnimateFadeThree"
                  role="tab" aria-expanded="true">
                  Css
                </a>
                </li>
              </ul>
              <div class="tab-content">
                <div class="tab-pane active animation-fade" id="exampleTabsAnimateFadeOne" role="tabpanel">
                  Omnisque ius possent effici approbantibus earumque explicabo volunt. Aptissimum
                  video sola divina amputata aliquos amputata, quanti minime quisquis
                  astris depravare. Consecutus tranquilli ille meminit obruamus
                  quas. Triari verbis, aliquos ignavi.
                </div>
                <div class="tab-pane animation-fade" id="exampleTabsAnimateFadeTwo" role="tabpanel">
                  Ambigua huc ipsarum similique malis physicis splendide, miser philosophi tria finitum
                  errata hominum emolumento officii explicabo appellantur, suscipiet
                  inciderit spatio, quantumcumque disciplinae maluisti putarent
                  cogitemus. Voluerint adipiscendarum aristotele invidi fructuosam.
                </div>
                <div class="tab-pane animation-fade" id="exampleTabsAnimateFadeThree" role="tabpanel">
                  Infimum finibus optimi contentus legendam electram, stabilitas antiquitate easque
                  sicut qualisque, atomus versatur alienae, brute pulcherrimum
                  dividendo miserius utinam directam, omnium laborum. Statue litteras
                  uberiora nescio tribuat, contereret vituperandae, magnam.
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- End Tab Animation -->
      <!-- Panel Collapse -->
      <div class="panel">
        <div class="panel-heading">
          <h3 class="panel-title">Collapse</h3>
        </div>
        <div class="panel-body container-fluid">
          <div class="row row-lg">
            <div class="col-lg-6">
              <!-- Example Example -->
              <div class="example-wrap margin-lg-0">
                <h4 class="example-title">Example</h4>
                <p>Click the buttons below to show and hide another element via class
                  changes:</p>
                <ul>
                  <li><code>.collapse</code> hides content</li>
                  <li><code>.collapsing</code> is applied during transitions</li>
                  <li><code>.collapse.in</code> shows content</li>
                </ul>
                <p>You can use a link with the <code>href</code> attribute, or a button
                  with the <code>data-target</code> attribute. In both cases, the
                  <code>data-toggle="collapse"</code> is required.</p>
                <div class="example">
                  <div class="example-buttons">
                    <a class="btn btn-primary" data-toggle="collapse" href="#exampleCollapseExample"
                    aria-expanded="false" aria-controls="exampleCollapseExample">
                  Link with href
                  </a>
                    <button type="button" class="btn btn-primary" data-toggle="collapse" data-target="#exampleCollapseExample"
                    aria-expanded="false" aria-controls="exampleCollapseExample">
                      Button with data-target
                    </button>
                  </div>
                  <div class="collapse" id="exampleCollapseExample">
                    <div class="well">
                      Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson
                      ad squid. Nihil anim keffiyeh helvetica, craft beer labore
                      wes anderson cred nesciunt sapiente ea proident.
                    </div>
                  </div>
                </div>
              </div>
              <!-- End Example Example -->
            </div>
            <div class="col-lg-6">
              <!-- Example Accordion Example -->
              <div class="example-wrap">
                <h4 class="example-title">Accordion Example</h4>
                <div class="example">
                  <div class="panel-group panel-group-simple margin-bottom-0" id="exampleAccordion"
                  aria-multiselectable="true" role="tablist">
                    <div class="panel">
                      <div class="panel-heading" id="exampleHeadingOne" role="tab">
                        <a class="panel-title" data-parent="#exampleAccordion" data-toggle="collapse" href="#exampleCollapseOne"
                        aria-controls="exampleCollapseOne" aria-expanded="true">
                        Collapsible Group Item #1
                      </a>
                      </div>
                      <div class="panel-collapse collapse in" id="exampleCollapseOne" aria-labelledby="exampleHeadingOne"
                      role="tabpanel">
                        <div class="panel-body">
                          Viros falso ad noctesque, perpetuam probabis molestum labore rerum t alterum indocti
                          persequeretur dignitatis, numquam an quantus inopem,
                          intellegam praetermissum conquirendae intus, amicorum
                          putarent assiduitas sicut suscipiet fructuosam, summis
                          fortitudinem cupiditatum depravata vita volumus. Posteri
                          tantam partes poterimus ea tibi, physici.
                        </div>
                      </div>
                    </div>
                    <div class="panel">
                      <div class="panel-heading" id="exampleHeadingTwo" role="tab">
                        <a class="panel-title collapsed" data-parent="#exampleAccordion" data-toggle="collapse"
                        href="#exampleCollapseTwo" aria-controls="exampleCollapseTwo"
                        aria-expanded="false">
                        Collapsible Group Item #2
                      </a>
                      </div>
                      <div class="panel-collapse collapse" id="exampleCollapseTwo" aria-labelledby="exampleHeadingTwo"
                      role="tabpanel">
                        <div class="panel-body">
                          Legendus albam declinabunt plus omnisque existimant, depulsa libido irridente quoddam
                          eripuit excruciant, sublata amicis corporisque utrum
                          detracto suaviter caritatem libero, causas, odioque sollicitudines
                          sic eruditionem scaevola, magnam gravissimis utramque
                          scriptum defuturum, forensibus, laboribus voluptate maestitiam,
                          haeret inopem optimum satisfacit ii latinam.
                        </div>
                      </div>
                    </div>
                    <div class="panel">
                      <div class="panel-heading" id="exampleHeadingThree" role="tab">
                        <a class="panel-title collapsed" data-parent="#exampleAccordion" data-toggle="collapse"
                        href="#exampleCollapseThree" aria-controls="exampleCollapseThree"
                        aria-expanded="false">
                        Collapsible Group Item #3
                      </a>
                      </div>
                      <div class="panel-collapse collapse" id="exampleCollapseThree" aria-labelledby="exampleHeadingThree"
                      role="tabpanel">
                        <div class="panel-body">
                          Neglegit male hostis temporibus, praesens nullae disputationi directam discordans
                          dedocere. Exquisitaque physici. Spe corpora tibi facerem
                          probet gaudemus diuturnitatem miserius, turbent depravare
                          defendere dum historiae musicis timidiores depulsa, effectrices
                          fruitur dolor aequi dominationis. Perfruique labefactetur
                          invenerit explicavi tradit efficiatur videtis ullam.
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- End Example Accordion Example -->
            </div>
          </div>
        </div>
      </div>
      <!-- End Panel Collapse -->
      <div>
        <h3>Accordions</h3>
        <div class="row">
          <div class="col-lg-6">
            <!-- Example Default Accordion -->
            <div class="examle-wrap">
              <h4 class="example-title">Default Accordion</h4>
              <div class="example">
                <div class="panel-group" id="exampleAccordionDefault" aria-multiselectable="true"
                role="tablist">
                  <div class="panel">
                    <div class="panel-heading" id="exampleHeadingDefaultOne" role="tab">
                      <a class="panel-title" data-toggle="collapse" href="#exampleCollapseDefaultOne"
                      data-parent="#exampleAccordionDefault" aria-expanded="true"
                      aria-controls="exampleCollapseDefaultOne">
                      Collapsible Group Item #1
                    </a>
                    </div>
                    <div class="panel-collapse collapse in" id="exampleCollapseDefaultOne" aria-labelledby="exampleHeadingDefaultOne"
                    role="tabpanel">
                      <div class="panel-body">
                        De moveat laudatur vestra parum doloribus labitur sentire partes, eripuit praesenti
                        congressus ostendit alienae, voluptati ornateque accusamus
                        clamat reperietur convicia albucius, veniat quocirca vivendi
                        aristotele errorem epicurus. Suppetet. Aeternum animadversionis,
                        turbent cn partem porrecta c putamus diceret decore. Vero
                        itaque incursione.
                      </div>
                    </div>
                  </div>
                  <div class="panel">
                    <div class="panel-heading" id="exampleHeadingDefaultTwo" role="tab">
                      <a class="panel-title collapsed" data-toggle="collapse" href="#exampleCollapseDefaultTwo"
                      data-parent="#exampleAccordionDefault" aria-expanded="false"
                      aria-controls="exampleCollapseDefaultTwo">
                      Collapsible Group Item #2
                    </a>
                    </div>
                    <div class="panel-collapse collapse" id="exampleCollapseDefaultTwo" aria-labelledby="exampleHeadingDefaultTwo"
                    role="tabpanel">
                      <div class="panel-body">
                        Praestabiliorem. Pellat excruciant legantur ullum leniter vacare foris voluptate
                        loco ignavi, credo videretur multoque choro fatemur mortis
                        animus adoptionem, bello statuat expediunt naturales frequenter
                        terminari nomine, stabilitas privatio initia paranda contineri
                        abhorreant, percipi dixerit incurreret deorsum imitarentur
                        tenetur antiopam latinam haec.
                      </div>
                    </div>
                  </div>
                  <div class="panel">
                    <div class="panel-heading" id="exampleHeadingDefaultThree" role="tab">
                      <a class="panel-title collapsed" data-toggle="collapse" href="#exampleCollapseDefaultThree"
                      data-parent="#exampleAccordionDefault" aria-expanded="false"
                      aria-controls="exampleCollapseDefaultThree">
                      Collapsible Group Item #3
                    </a>
                    </div>
                    <div class="panel-collapse collapse" id="exampleCollapseDefaultThree" aria-labelledby="exampleHeadingDefaultThree"
                    role="tabpanel">
                      <div class="panel-body">
                        Horum, antiquitate perciperet d conspectum locus obruamus animumque perspici probabis
                        suscipere. Desiderat magnum, contenta poena desiderant
                        concederetur menandri damna disputandum corporum equidem
                        cyrenaicisque. Defuturum ultimum ista ignaviamque iudicant
                        feci incursione, reprimique fruenda utamur tu faciam complexiones
                        eo, habeo ortum iucundo artes.
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- End Example Default Accordion -->
          </div>
          <div class="col-lg-6">
            <!-- Example Continuous Accordion -->
            <div class="examle-wrap">
              <h4 class="example-title">Continuous Accordion</h4>
              <div class="example">
                <div class="panel-group panel-group-continuous" id="exampleAccordionContinuous"
                aria-multiselectable="true" role="tablist">
                  <div class="panel">
                    <div class="panel-heading" id="exampleHeadingContinuousOne" role="tab">
                      <a class="panel-title" data-parent="#exampleAccordionContinuous" data-toggle="collapse"
                      href="#exampleCollapseContinuousOne" aria-controls="exampleCollapseContinuousOne"
                      aria-expanded="true">
                      Collapsible Group Item #1
                    </a>
                    </div>
                    <div class="panel-collapse collapse in" id="exampleCollapseContinuousOne" aria-labelledby="exampleHeadingContinuousOne"
                    role="tabpanel">
                      <div class="panel-body">
                        Amice cum distinguantur, pronuntiaret omnesque. Sensum opes bonorum rationis propemodum
                        viros elegantis perpetua impetu, sentiunt probo insidiarum
                        telos eruditus, inanium, inprobitatem sero medium necessitatibus,
                        reperiuntur tolerabiles arbitrarer maxime equidem iniucundus
                        ecce sine possunt, primo expedire sumitur infinitio dicturum
                        statuam adhibuit, assumenda.
                      </div>
                    </div>
                  </div>
                  <div class="panel">
                    <div class="panel-heading" id="exampleHeadingContinuousTwo" role="tab">
                      <a class="panel-title collapsed" data-parent="#exampleAccordionContinuous" data-toggle="collapse"
                      href="#exampleCollapseContinuousTwo" aria-controls="exampleCollapseContinuousTwo"
                      aria-expanded="false">
                      Collapsible Group Item #2
                    </a>
                    </div>
                    <div class="panel-collapse collapse" id="exampleCollapseContinuousTwo" aria-labelledby="exampleHeadingContinuousTwo"
                    role="tabpanel">
                      <div class="panel-body">
                        Honoris euripidis, perspici dolemus varias dicat dicantur feramus quisquis desideret
                        solet, diligant aequo iudicem a superstitione secumque
                        ponatur soluta iucunditate, artibus confidam esset quaeri
                        sitisque legendis appareat consequuntur notionem, splendore
                        maius legendis, adolescens nescio perpetua motum adhuc
                        amoris optimus nihil requirere.
                      </div>
                    </div>
                  </div>
                  <div class="panel">
                    <div class="panel-heading" id="exampleHeadingContinuousThree" role="tab">
                      <a class="panel-title collapsed" data-parent="#exampleAccordionContinuous" data-toggle="collapse"
                      href="#exampleCollapseContinuousThree" aria-controls="exampleCollapseContinuousThree"
                      aria-expanded="false">
                      Collapsible Group Item #3
                    </a>
                    </div>
                    <div class="panel-collapse collapse" id="exampleCollapseContinuousThree" aria-labelledby="exampleHeadingContinuousThree"
                    role="tabpanel">
                      <div class="panel-body">
                        Torquatis noster, impensa turma bono, litterae postulet, permanentes nostro derigatur
                        veriusque istam accedere intervalla chremes affert. Ius
                        sententiae legatis atomus quas, ponunt levitatibus timeret.
                        Reque sinit, magnam percipi censet mentitum sis nivem virtutibus
                        seiungi. Bono disserunt nemore. Propter blanditiis laboriosam
                        expeteremus.
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- End Example Continuous Accordion -->
          </div>
        </div>
      </div>
    </div>
<br/>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.template', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>