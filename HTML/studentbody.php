<style>
    <?php include '../CSS/student-chat-box.css'?>
</style>
<div class="cont-out">
    <div class="cont-first">
        <!-- <?php include 'create-new-query'?> -->
        <button id=create_new_query>Create New Query</button>
        <!-- <div class="dropdown toggle-position"> -->
        <!-- <button class="btn btn-secondary dropdown-toggle " type="button" id="dropdownMenuButton" data-toggle="dropdown" -->
        <!-- aria-haspopup="true" aria-expanded="false"> -->
        
        <p>Ongoing</p>
<!-- </button> -->
<!-- <div class="dropdown-menu" aria-labelledby="dropdownMenuButton"> -->
            <!-- <li class="dropdown-item"> -->
            <div class="query-list" id="underconsid">

            <button class=query>Request to extend assignment submission deadline</button>
</div>
            <!-- </li> -->
<!-- </div> -->
        <p>Underconsideration</p>
        <div class="query-list" id="ssunderconsid">
            <button class=query>Permission to grant OD for Basketball</button>
        </div>
        <p>Closed</p>
        <div class="query-list" id="closed">

        </div>
        <p>Rejected</p>
        <div class="query-list" id="rejected">
        <button class=query>Grant Exception to not give practicals</button>
        <button class=query>Grant Permission to organise Holi Function</button>

        </div>
    </div>
    <div class="cont-second">
        <div class=query-details><h3>Request to extend assignment submission deadline</h3><p>Facility - CS Dept.</p><p> Faculty : Pankaj Jhadwal</p></div>
        <div class=chat-screen>
            <div class=chats>
                <div class="div_send"><p class=msg-sent>Hi Sir<br>Can we have an extention for the subission of IOT assignment</p></div>
            <p class=msg-received>Would you please specify the reason??</p>
            </div>
            <div class=sent-box>
                <input type="text" name="msg" placeholder="Type your Text"/>
                <button class=sent-button><i class="far fa-paper-plane"></i></button>
                <!-- <button class=sent-button><i class="fas fa-clock"></i></button> -->

            </div>
        </div>

    </div>
</div>