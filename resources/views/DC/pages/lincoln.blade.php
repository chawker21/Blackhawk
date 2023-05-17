@extends('DC.layouts.app')


@section('title', '| Photo Site')

@section('content')

    <div class="row">
        <div class="header thumbnail">
            <img src="/DC_resources/assets/extra/IMG_header.jpg">
        </div>
    </div>



<div class="row">

    <section class="col-sm-12">
        <div class="row" id="lionrow">

        <ul>
            @for($i = 0; $i < 12; $i++)
            <li id="lionhead" class="col-xs-1 thumbnail">
                <app-lionhead></app-lionhead>
            </li>
            @endfor
        </ul>
</div>
        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
            <div class="panel panel-default">
                <div class="panel-heading"  role="tab" id="headingOne">
                    <h4 class="panel-title">
                        <a role="button"  data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true"
                           aria-controls="collapseOne">
                            The Lincoln Memorial
                        </a>
                    </h4>
                </div>
                <div id="collapseOne" class="panel-collapse collapse " role="tabpanel" aria-labelledby="headingOne">
                    <div class="panel-body panel-bg">
                        <img src="/DC_resources/assets/extra/IMG_4164_small.jpg" alt="mainpicture">
                        <p id="tlm" style="margin-bottom:50px;">The Lincoln Memorial is an American national monument built to honor the 16th President
                            of the United States, Abraham Lincoln. It is located on the western end of the National Mall in Washington,
                            D.C., across from the Washington Monument. The architect was Henry Bacon; the designer of the primary
                            statue – Abraham Lincoln, 1920 – was Daniel Chester French; the Lincoln statue was carved by the
                            Piccirilli Brothers;[2] and the painter of the interior murals was Jules Guerin. Dedicated in 1922,
                            it is one of several monuments built to honor an American president. It has always been a major tourist
                            attraction and since the 1930s has been a symbolic center focused on race relations.

                            The building is in the form of a Greek Doric temple and contains a large seated sculpture of Abraham
                            Lincoln and inscriptions of two well-known speeches by Lincoln, "The Gettysburg Address" and his Second
                            Inaugural Address. The memorial has been the site of many famous speeches, including Martin Luther King's
                            "I Have a Dream" speech, delivered on August 28, 1963, during the rally at the end of the March on
                            Washington for Jobs and Freedom.

                            Like other monuments on the National Mall – including the nearby Vietnam Veterans Memorial, Korean War
                            Veterans Memorial, and National World War II Memorial – the memorial is administered by the National Park
                            Service under its National Mall and Memorial Parks group. It has been listed on the National Register of
                            Historic Places since October 15, 1966. It is open to the public 24 hours a day. In 2007, it was ranked
                            seventh on the List of America's Favorite Architecture by the American Institute of Architects. Since 2010,
                            approximately 6 million people visit the memorial annually.[3]</p>
                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingTwo">
                    <h4 class="panel-title">
                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            History
                        </a>
                    </h4>
                </div>
                <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                    <div class="panel-body panel-bg ">
                        <img src="/DC_resources/assets/extra/IMG_5832_small.jpg" alt="nightpicture">
                        <p>

                            The first public memorial to Abraham Lincoln in Washington, D.C., was a statue by Lot Flannery erected in
                            front of the District of Columbia City Hall in 1868, three years after Lincoln's assassination.[4][5]
                            Demands for a fitting national memorial had been voiced since the time of Lincoln's death. In 1867,
                            Congress passed the first of many bills incorporating a commission to erect a monument for the sixteenth
                            president. An American sculptor, Clark Mills, was chosen to design the monument. His plans reflected the
                            nationalistic spirit of the time, and called for a 70-foot (21 m) structure adorned with six equestrian
                            and 31 pedestrian statues of colossal proportions, crowned by a 12-foot (3.7 m) statue of Abraham Lincoln.
                            Subscriptions for the project were insufficient.[6]

                            The matter lay dormant until the start of the 20th century, when, under the leadership of Senator Shelby
                            M. Cullom of Illinois, six separate bills were introduced in Congress for the incorporation of a new
                            memorial commission. The first five bills, proposed in the years 1901, 1902, and 1908, met with defeat
                            because of opposition from Speaker Joe Cannon. The sixth bill (Senate Bill 9449), introduced on December
                            13, 1910, passed. The Lincoln Memorial Commission had its first meeting the following year and U.S.
                            President William H. Taft was chosen as the commission's president. Progress continued at a steady pace
                            and by 1913 Congress had approved of the Commission's choice of design and location.

                            There were questions regarding the commission's plan. Many thought that architect Henry Bacon's Greek
                            temple design was far too ostentatious for a man of Lincoln's humble character. Instead they proposed a
                            simple log cabin shrine. The site too did not go unopposed. The recently reclaimed land in West Potomac
                            Park was seen by many to be either too swampy or too inaccessible. Other sites, such as Union Station,
                            were put forth. The Commission stood firm in its recommendation, feeling that the Potomac Park location,
                            situated on the Washington Monument-Capitol axis, overlooking the Potomac River and surrounded by open
                            land, was ideal. Furthermore, the Potomac Park site had already been designated in the McMillan Plan of
                            1901 to be the location of a future monument comparable to that of the Washington Monument.[6][7]

                            With Congressional approval and a $300,000 allocation, the project got underway. On February 12, 1914,
                            a dedication ceremony was conducted and the following month the actual construction began. Work progressed
                            steadily according to schedule. Some changes were made to the plan. The statue of Lincoln, originally
                            designed to be 10 feet (3.0 m) tall, was enlarged to 19 feet (5.8 m) to prevent it from being overwhelmed
                            by the huge chamber. As late as 1920, the decision was made to substitute an open portal for the bronze
                            and glass grille which was to have guarded the entrance. Despite these changes, the Memorial was finished
                            on schedule. Commission president William H. Taft – who was then Chief Justice of the United States –
                            dedicated the Memorial on May 30, 1922 and presented it to President Warren G. Harding, who accepted it
                            on behalf of the American people. Lincoln's only surviving son, 78-year-old Robert Todd Lincoln, was in
                            attendance.[8]

                            The Memorial was listed on the National Register of Historic Places on October 15, 1966.[9]</p>                    </div>
                </div>
            </div>
</div>





        <div class="row" id="eagle">

            <ul>
                @for($i = 0; $i < 6; $i++)
                        <li  class="col-xs-6 col-md-2 thumbnail">
                    @if ($i % 2 === 0)
                        <img src="/DC_resources/assets/extra/IMG_reliefeagle3.jpg" alt="eagle">

                        </li>

                    @elseif ($i % 2 != 0)
                        <img src="/DC_resources/assets/extra/IMG_reliefeagle4.jpg" alt="eagle">

                        </li>

                    @endif
                @endfor
            </ul>

        </div>
        <div class="row" id="wreathrow">
            <ul>
                @for($i = 0; $i < 3; $i++)
                    <li class="col-xs-4 thumbnail">
                        <img src="/DC_resources/assets/extra/IMG_wreath.jpg"  alt="relief wreath" height="100" width="146">
                    </li>
                @endfor
            </ul>
        </div>

    </section>

</div>



    <div class="row">

        <div class="col-xs-6 col-md-4">
            <div class="thumbnail thumbmargin">
                <a href="#lincoln-1" data-toggle="modal"><img src="/DC_resources/assets/extra/IMG_4081.jpg"
                alt="lincoln memorial" data-toggle="tooltip" title="Lincoln Memorial 1">
                </a>
                <p>The structure measures 189.7 by 118.5 feet (57.8 by 36.1 m)
                    and is 99 feet (30 m) tall. It is surrounded by a peristyle of 36 fluted Doric
                    columns, one for each of the 36 states in the Union at the time of Lincoln's
                    death, and two columns in-antis at the entrance behind the colonnade.
                    </p>
                </div>
                </div>
        <div class="col-xs-6 col-md-4">
            <div class="thumbnail thumbmargin">
                <a href="#lincoln-2" data-toggle="modal"><img src="/DC_resources/assets/extra/IMG_4231.jpg"
                                 alt="lincoln memorial">
                </a>
                <p>Inscribed on the frieze, are the names of the 36 states
                    in the Union at the time of Lincoln's death and the dates in which they
                    entered the Union. Their names are separated by double wreath
                    medallions in bas-relief.</p>
            </div>
        </div>

        <div class="col-xs-6 col-md-4">
            <div class="thumbnail thumbmargin">
                <a href="#lincoln-3" data-toggle="modal"><img src="/DC_resources/assets/extra/IMG_4112.jpg"
                                 alt="lincoln memorial">
                </a>
                <p>The statue, originally intended to be
                    only 10 feet (3.0 m) tall, was, on further consideration, enlarged so that it
                    finally stood 19 feet (5.8 m) tall from head to foot, the scale being such that
                    if Lincoln were standing, he would be 28 feet (8.5 m) tall.</p>
            </div>
        </div>
        <div class="col-xs-6 col-md-4">
            <div class="thumbnail thumbmargin">
                <a href="#lincoln-4" data-toggle="modal"><img src="/DC_resources/assets/extra/IMG_4131.jpg"
                                 alt="lincoln memorial">
                </a>
                <p>Some have claimed that
                    the face of General Robert E. Lee was carved onto the back of Lincoln's head,[16]
                    and looks back across the Potomac toward his former home, Arlington House, now
                    within the bounds of Arlington National Cemetery.
                </p>
            </div>
        </div>
        <div class="col-xs-6 col-md-4">
            <div class="thumbnail thumbmargin">
                <a href="#lincoln-5" data-toggle="modal"><img src="/DC_resources/assets/extra/IMG_4114.jpg"
                alt="lincoln memorial">
                </a>
                <p> Lying between the north and south chambers is the central hall containing the
                    solitary figure of Lincoln sitting in contemplation. The statue was carved by
                    the Piccirilli Brothers under the supervision of the sculptor, Daniel Chester
                    French, and took four years to complete.
                    </p>
                </div>
                    </div>
        <div class="col-xs-6 col-md-4">
            <div class="thumbnail thumbmargin">
                <a href="#lincoln-6" data-toggle="modal"><img src="/DC_resources/assets/extra/IMG_4133.jpg"
                                 alt="lincoln memorial">
                </a>
                <p>Another popular legend is that
                    Lincoln is shown using sign language to represent his initials, with his left
                    hand shaped to form an "A" and his right hand to form an "L", the president's
                    initials. The National Park Service denies both legends.</p>

            </div>
        </div>
        <div class="col-xs-6 col-md-4">
            <div class="thumbnail thumbmargin">
                <a href="#lincoln-7" data-toggle="modal"><img src="/DC_resources/assets/extra/IMG_enshrined.jpg"
                                 alt="lincoln memorial">
                </a>
                <p>The statue is discretely bordered by two pilasters, one on each side. Between
                    these pilasters, and above Lincoln's head, is engraved an epitaph of Lincoln[13]
                    by Royal Cortissoz.
                </p>
            </div>
        </div>
        <div class="col-xs-6 col-md-4">
            <div class="thumbnail thumbmargin">
                <a href="#lincoln-8" data-toggle="modal"><img src="/DC_resources/assets/extra/IMG_4158.jpg"
                                 alt="lincoln memorial">
                </a>
                <p>On August 28, 1963, the memorial grounds were the site of the March on Washington
                    for Jobs and Freedom, which proved to be a high point of the American Civil
                    Rights Movement. It is estimated that approximately 250,000 people came to the
                    event, where they heard Martin Luther King, Jr., deliver his historic speech,
                    "I Have a Dream"</p>
            </div>
        </div>


        <div class="col-xs-6 col-md-4">
            <div class="thumbnail thumbmargin">
                <a href="#lincoln-9" data-toggle="modal"><img src="/DC_resources/assets/extra/IMG_4165.jpg"
                                 alt="lincoln memorial">
                </a>
                <p>The columns stand 44 feet (13 m) tall with a base diameter of 7.5 feet (2.3 m).
                    Each column is built from 12 drums including the capital. The columns, like the
                    exterior walls and facades, are inclined slightly toward the building's interior.

                </p>
            </div>
        </div>

        <div class="col-xs-6 col-md-4">
            <div class="thumbnail thumbmargin">
                <a href="#lincoln-10" data-toggle="modal"><img src="/DC_resources/assets/extra/IMG_4148.jpg"
                alt="lincoln memorial">
                </a>
                <p>The columns are inclined slightly toward
                    the building's interior. This is to compensate for perspective distortions which
                    would otherwise make the memorial appear to bulge out at the top when compared
                    with the bottom.</p>
                </div>
                    </div>
        <div class="col-xs-6 col-md-4">
            <div class="thumbnail thumbmargin">
                <a href="#lincoln-11" data-toggle="modal"><img src="/DC_resources/assets/extra/IMG_4134.jpg"
                alt="lincoln memorial">
                </a>
                <p>The central chamber, housing the statue of Lincoln, is 60 feet wide, 74 feet deep,
                    and 60 feet high.[12] The north and south chambers display carved inscriptions
                    of Lincoln's second inaugural address and his Gettysburg Address.
                    </p>
                </div>
                    </div>
        <div class="col-xs-6 col-md-4">
            <div class="thumbnail thumbmargin">
                <a href="#lincoln-12" data-toggle="modal"><img src="/DC_resources/assets/extra/IMG_4121.jpg"
                alt="lincoln memorial">
                </a>
                <p>Bordering these inscriptions are pilasters ornamented with fasces, eagles, and
                    wreaths. The inscriptions and adjoining ornamentation are by Evelyn Beatrice
                    Longman.
                    </p>
                </div>
                    </div>

        </div>




    <div id="lincoln-1" class="modal fade" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                <button type="button" class="close glyphicon glyphicon-remove" data-dismiss="modal">

                </button>
                <H3 class="modal-title">Lincoln Memorial</H3>

                </div>
                <div class="modal-body">
                <p><img src="/public/images/WashDC/IMG_4081_large.jpg"alt="lincoln memorial" class="img-responsive pull-left">
                    Lincoln Memorial Washington D.C 2013 - <br /> The exterior of the Memorial echoes a
                    classic Greek temple and features Yule marble from Colorado. The structure measures
                    189.7 by 118.5 feet (57.8 by 36.1 m) and is 99 feet (30 m) tall. It is surrounded by a
                    peristyle of 36 fluted Doric columns, one for each of the 36 states in the Union at the
                    time of Lincoln's death, and two columns in-antis at the entrance behind the colonnade.
                    The columns stand 44 feet (13 m) tall with a base diameter of 7.5 feet (2.3 m). Each column
                    is built from 12 drums including the capital. The columns, like the exterior walls and
                    facades, are inclined slightly toward the building's interior. This is to compensate for
                    perspective distortions which would otherwise make the memorial appear to bulge out at the
                    top when compared with the bottom, a common feature of Ancient Greek architecture</p>
                </div>
                <div class="modal-footer">
                <button class="btn btn-primary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

<div id="lincoln-2" class="modal fade" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close glyphicon glyphicon-remove" data-dismiss="modal">

                </button>
                <H3>Lincoln Memorial</H3>

            </div>
            <div class="modal-body">
                <p><img src="/public/images/WashDC/IMG_4231_large.jpg"alt="lincoln memorial" class="img-responsive pull-left">
                    Lincoln Memorial Washington D.C 2013 - <br /> Above the colonnade, inscribed on the frieze, are the
                    names of the 36 states in the Union at the time of Lincoln's death and the dates in which they
                    entered the Union.[Note 1] Their names are separated by double wreath medallions in bas-relief.
                    The cornice is composed of a carved scroll regularly interspersed with projecting lions' heads
                    and ornamented with palmetto cresting along the upper edge. Above this on the attic frieze are
                    inscribed the names of the 48 states present at the time of the Memorial's dedication. A bit
                    higher is a garland joined by ribbons and palm leaves, supported by the wings of eagles. All
                    ornamentation on the friezes and cornices was done by Ernest C. Bairstow.</p>
            </div>
            <div class="modal-footer">
                <button class="btn btn-primary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<div id="lincoln-3" class="modal fade" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close glyphicon glyphicon-remove" data-dismiss="modal">

                </button>
                <H3>Lincoln Memorial</H3>

            </div>
            <div class="modal-body">
                <p><img src="/public/images/WashDC/IMG_4112_large.jpg"alt="lincoln memorial" class="img-responsive pull-left">
                    Lincoln Memorial Washington D.C 2013 - <br /> Lying between the north and south chambers is the
                    central hall containing the solitary figure of Lincoln sitting in contemplation. The statue was
                    carved by the Piccirilli Brothers under the supervision of the sculptor, Daniel Chester French,
                    and took four years to complete. The statue, originally intended to be only 10 feet (3.0 m) tall,
                    was, on further consideration, enlarged so that it finally stood 19 feet (5.8 m) tall from head
                    to foot, the scale being such that if Lincoln were standing, he would be 28 feet (8.5 m) tall.
                    The widest span of the statue corresponds to its height. Of Georgia white marble, it weighs 175
                    short tons (159 t) and was shipped in twenty-eight pieces.</p>
            </div>
            <div class="modal-footer">
                <button class="btn btn-primary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<div id="lincoln-4" class="modal fade" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close glyphicon glyphicon-remove" data-dismiss="modal">

                </button>
                <H3>Lincoln Memorial</H3>

            </div>
            <div class="modal-body">
                <p><img src="/public/images/WashDC/IMG_4131_large.jpg"alt="lincoln memorial" class="img-responsive pull-left">
                    Lincoln Memorial Washington D.C 2013 - <br /> Lying between the north and south chambers is the
                    central hall containing the solitary figure of Lincoln sitting in contemplation. The statue was
                    carved by the Piccirilli Brothers under the supervision of the sculptor, Daniel Chester French,
                    and took four years to complete. The statue, originally intended to be only 10 feet (3.0 m) tall,
                    was, on further consideration, enlarged so that it finally stood 19 feet (5.8 m) tall from head
                    to foot, the scale being such that if Lincoln were standing, he would be 28 feet (8.5 m) tall.
                    The widest span of the statue corresponds to its height. Of Georgia white marble, it weighs 175
                    short tons (159 t) and was shipped in twenty-eight pieces.</p>
            </div>
            <div class="modal-footer">
                <button class="btn btn-primary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<div id="lincoln-5" class="modal fade" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close glyphicon glyphicon-remove" data-dismiss="modal">

                </button>
                <H3>Lincoln Memorial</H3>

            </div>
            <div class="modal-body">
                <p><img src="/public/images/WashDC/IMG_4114_large.jpg"alt="lincoln memorial" class="img-responsive pull-left">
                    Lincoln Memorial Washington D.C 2013 - <br /> The sculpture has been at the center of two urban
                    legends. Some have claimed that the face of General Robert E. Lee was carved onto the back of
                    Lincoln's head,[16] and looks back across the Potomac toward his former home, Arlington House,
                    now within the bounds of Arlington National Cemetery. </p>
            </div>
            <div class="modal-footer">
                <button class="btn btn-primary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<div id="lincoln-6" class="modal fade" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close glyphicon glyphicon-remove" data-dismiss="modal">

                </button>
                <H3>Lincoln Memorial</H3>

            </div>
            <div class="modal-body">
                <p><img src="/public/images/WashDC/IMG_4133_large.jpg"alt="lincoln memorial" class="img-responsive pull-left">
                    Lincoln Memorial Washington D.C 2013 - <br /> Another popular legend is that Lincoln is shown using
                    sign language to represent his initials, with his left hand shaped to form an "A" and his right
                    hand to form an "L", the president's initials. The National Park Service denies both legends.[16]
                    However, historian Gerald Prokopowicz writes that, while it is not clear that sculptor Daniel
                    Chester French intended Lincoln's hands to be formed into sign language versions of his initials,
                    it is possible that French did intend it, because he was familiar with American Sign Language,
                    and he would have had a reason to do so, that is, to pay tribute to Lincoln for having signed
                    the federal legislation giving Gallaudet University, a university for the deaf, the authority
                    to grant college degrees.[17] The National Geographic Society's publication, "Pinpointing the
                    Past in Washington, D.C." states that Daniel Chester French had a son who was deaf and that the
                    sculptor was familiar with sign language.[18][19] Historian James A. Percoco has observed that,
                    although there are no extant documents showing that French had Lincoln's hands carved to
                    represent the letters "A" and "L" in American Sign Language, "I think you can conclude that
                    it's reasonable to have that kind of summation about the hands."</p>
            </div>
            <div class="modal-footer">
                <button class="btn btn-primary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<div id="lincoln-7" class="modal fade" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close glyphicon glyphicon-remove" data-dismiss="modal">

                </button>
                <H3>Lincoln Memorial</H3>

            </div>
            <div class="modal-body">
                <p><img src="/public/images/WashDC/IMG_4127_large.jpg"alt="lincoln memorial" class="img-responsive pull-left">
                    Lincoln Memorial Washington D.C 2013 - <br /> The statue rests upon an oblong pedestal of Tennessee
                    marble 10 feet (3.0 m) high, 16 feet (4.9 m) wide, and 17 feet (5.2 m) deep. Directly beneath
                    this lies a platform of Tennessee marble about 34.5 feet (10.5 m) long, 28 feet (8.5 m) wide,
                    and 6.5 inches (0.17 m) high. Lincoln's arms rest on representations of Roman fasces, a subtle
                    touch that associates the statue with the Augustan (and imperial) theme (obelisk and funerary
                    monuments) of the Washington Mall.[14] The statue is discretely bordered by two pilasters, one
                    on each side. Between these pilasters, and above Lincoln's head, is engraved an epitaph of
                    Lincoln by Royal Cortissoz.</p>
            </div>
            <div class="modal-footer">
                <button class="btn btn-primary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<div id="lincoln-8" class="modal fade" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close glyphicon glyphicon-remove" data-dismiss="modal">

                </button>
                <H3>Lincoln Memorial</H3>

            </div>
            <div class="modal-body">
                <p><img src="/public/images/WashDC/IMG_4158_large.jpg"alt="lincoln memorial" class="img-responsive pull-left">
                    Lincoln Memorial Washington D.C 2013 - <br /> On August 28, 1963, the memorial grounds were the
                    site of the March on Washington for Jobs and Freedom, which proved to be a high point of the
                    American Civil Rights Movement. It is estimated that approximately 250,000 people came to the
                    event, where they heard Martin Luther King, Jr., deliver his historic speech, "I Have a Dream",
                    before the memorial honoring the president who had issued the Emancipation Proclamation 100
                    years earlier. King's speech, with its language of patriotism and its evocation of Lincoln's
                    Gettysburg Address, was meant to match the symbolism of the Lincoln Memorial as a monument to
                    national unity.[21] The D.C. police also appreciated the location because it was surrounded on
                    three sides by water, so that any incident could be easily contained.[22] Twenty years later,
                    on August 28, 1983, crowds gathered again to mark the 20th Anniversary Mobilization for Jobs,
                    Peace and Freedom, to reflect on progress in gaining civil rights for African Americans and to
                    commit to correcting continuing injustices. The "I Have a Dream" speech is such a part of the
                    Lincoln Memorial story, that the spot on which King stood, on the landing eighteen steps below
                    Lincoln's statue, was engraved in 2003 in recognition of the 40th anniversary of the event.</p>
            </div>
            <div class="modal-footer">
                <button class="btn btn-primary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<div id="lincoln-9" class="modal fade" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close glyphicon glyphicon-remove" data-dismiss="modal">

                </button>
                <H3>Lincoln Memorial</H3>

            </div>
            <div class="modal-body">
                <p><img src="/public/images/WashDC/IMG_4165_large.jpg"alt="lincoln memorial" class="img-responsive pull-left">
                    Lincoln Memorial Washington D.C 2013 - <br /> The exterior of the Memorial echoes a classic Greek
                    temple and features Yule marble from Colorado. The structure measures 189.7 by 118.5 feet (57.8
                    by 36.1 m) and is 99 feet (30 m) tall. It is surrounded by a peristyle of 36 fluted Doric
                    columns, one for each of the 36 states in the Union at the time of Lincoln's death, and two
                    columns in-antis at the entrance behind the colonnade. The columns stand 44 feet (13 m) tall
                    with a base diameter of 7.5 feet (2.3 m). Each column is built from 12 drums including the
                    capital. The columns, like the exterior walls and facades, are inclined slightly toward the
                    building's interior. This is to compensate for perspective distortions which would otherwise
                    make the memorial appear to bulge out at the top when compared with the bottom, a common
                    feature of Ancient Greek architecture.</p>
            </div>
            <div class="modal-footer">
                <button class="btn btn-primary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<div id="lincoln-10" class="modal fade" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close glyphicon glyphicon-remove" data-dismiss="modal">

                </button>
                <H3>Lincoln Memorial</H3>

            </div>
            <div class="modal-body">
                <p><img src="/public/images/WashDC/IMG_4148_large.jpg"alt="lincoln memorial" class="img-responsive pull-left">
                    Lincoln Memorial Washington D.C 2013 - <br /> The exterior of the Memorial echoes a classic Greek
                    temple and features Yule marble from Colorado. The structure measures 189.7 by 118.5 feet (57.8
                    by 36.1 m) and is 99 feet (30 m) tall. It is surrounded by a peristyle of 36 fluted Doric
                    columns, one for each of the 36 states in the Union at the time of Lincoln's death, and two
                    columns in-antis at the entrance behind the colonnade. The columns stand 44 feet (13 m) tall
                    with a base diameter of 7.5 feet (2.3 m). Each column is built from 12 drums including the
                    capital. The columns, like the exterior walls and facades, are inclined slightly toward the
                    building's interior. This is to compensate for perspective distortions which would otherwise
                    make the memorial appear to bulge out at the top when compared with the bottom, a common
                    feature of Ancient Greek architecture.</p>
            </div>
            <div class="modal-footer">
                <button class="btn btn-primary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<div id="lincoln-11" class="modal fade" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close glyphicon glyphicon-remove" data-dismiss="modal">

                </button>
                <H3>Lincoln Memorial</H3>

            </div>
            <div class="modal-body">
                <p><img src="/public/images/WashDC/IMG_4134_large.jpg"alt="lincoln memorial" class="img-responsive pull-left">
                    Lincoln Memorial Washington D.C 2013 - <br />The Memorial's interior is divided into three
                    chambers by two rows of four Ionic columns, each 50 feet (15 m) tall and 5.5 feet (1.7 m)
                    across at their base. The central chamber, housing the statue of Lincoln, is 60 feet wide,
                    74 feet deep, and 60 feet high.[12] The north and south chambers display carved inscriptions
                    of Lincoln's second inaugural address and his Gettysburg Address.[Note 2] Bordering these
                    inscriptions are pilasters ornamented with fasces, eagles, and wreaths. The inscriptions and
                    adjoining ornamentation are by Evelyn Beatrice Longman.[10]

                    The Memorial is replete with symbolic elements. The 36 columns represent the states of the
                    Union at the time of Lincoln's death; the 48 stone festoons above the columns represent the 48
                    states in 1922. Inside, each inscription is surmounted by a 60-by-12-foot (18.3 by 3.7 m) mural
                    by Jules Guerin portraying principles seen as evident in Lincoln's life: Freedom, Liberty,
                    Immortality, Justice, and the Law on the south wall; Unity, Fraternity, and Charity on the north.
                    Cypress trees, representing Eternity, are in the murals' backgrounds. The murals' paint
                    incorporated kerosene and wax to protect the exposed artwork from fluctuations in temperature
                    and moisture.[13]


                    The ceiling consists of bronze girders ornamented with laurel and oak leaves. Between these
                    are panels of Alabama marble, saturated with paraffin to increase translucency. But feeling
                    that the statue required even more light, Bacon and French designed metal slats for the ceiling
                    to conceal floodlights, which could be modulated to supplement the natural light; this
                    modification was installed in 1929. The one major alteration since was the addition of a
                    handicapped elevator in the 1970s.</p>
            </div>
            <div class="modal-footer">
                <button class="btn btn-primary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<div id="lincoln-12" class="modal fade" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close glyphicon glyphicon-remove" data-dismiss="modal">

                </button>
                <H3>Lincoln Memorial</H3>

            </div>
            <div class="modal-body">
                <p><img src="/public/images/WashDC/IMG_4121_large.jpg"alt="lincoln memorial" class="img-responsive pull-left">
                    Lincoln Memorial Washington D.C 2013 - <br />The Memorial's interior is divided into three
                    chambers by two rows of four Ionic columns, each 50 feet (15 m) tall and 5.5 feet (1.7 m)
                    across at their base. The central chamber, housing the statue of Lincoln, is 60 feet wide,
                    74 feet deep, and 60 feet high.[12] The north and south chambers display carved inscriptions
                    of Lincoln's second inaugural address and his Gettysburg Address.[Note 2] Bordering these
                    inscriptions are pilasters ornamented with fasces, eagles, and wreaths. The inscriptions and
                    adjoining ornamentation are by Evelyn Beatrice Longman.[10]

                    The Memorial is replete with symbolic elements. The 36 columns represent the states of the
                    Union at the time of Lincoln's death; the 48 stone festoons above the columns represent the 48
                    states in 1922. Inside, each inscription is surmounted by a 60-by-12-foot (18.3 by 3.7 m) mural
                    by Jules Guerin portraying principles seen as evident in Lincoln's life: Freedom, Liberty,
                    Immortality, Justice, and the Law on the south wall; Unity, Fraternity, and Charity on the north.
                    Cypress trees, representing Eternity, are in the murals' backgrounds. The murals' paint
                    incorporated kerosene and wax to protect the exposed artwork from fluctuations in temperature
                    and moisture.[13]


                    The ceiling consists of bronze girders ornamented with laurel and oak leaves. Between these
                    are panels of Alabama marble, saturated with paraffin to increase translucency. But feeling
                    that the statue required even more light, Bacon and French designed metal slats for the ceiling
                    to conceal floodlights, which could be modulated to supplement the natural light; this
                    modification was installed in 1929. The one major alteration since was the addition of a
                    handicapped elevator in the 1970s.</p>
            </div>
            <div class="modal-footer">
                <button class="btn btn-primary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

@endsection
