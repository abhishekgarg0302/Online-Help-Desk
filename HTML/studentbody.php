<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap');
    <?php include '../CSS/student-chat-box.css' ?>
</style>
<div class="cont-out">
    <div class="cont-first">
        <!-- <?php include 'create-new-query' ?> -->
        <button id=create_new_query>
            <i class="fa fa-plus-circle"></i>
            Create New Query
        </button>
        <div class="queries-list-scroller">
            <div class="quieries-list">
                <button class="queries_open_btn" type="button" data-toggle="collapse" data-target="#ongoing_queries_list" aria-expanded="false" aria-controls="ongoingqueries">
                    Ongoing
                </button>
                <div class="collapse extra_class" id="ongoing_queries_list">
                    <button class="query_btn">Request to extend assignment submission deadline</button>
                    <button class="query_btn">Request to extend assignment submission deadline</button>
                    <button class="query_btn">Request to extend assignment submission deadline</button>
                    <button class="query_btn">Request to extend assignment submission deadline</button>
                    <button class="query_btn">Request to extend assignment submission deadline</button>
                    <button class="query_btn">Request to extend assignment submission deadline</button>
                    <button class="query_btn">Request to extend assignment submission deadline</button>
                    <button class="query_btn">Request to extend assignment submission deadline</button>
                    <button class="query_btn">Request to extend assignment submission deadline</button>

                    <button class="query_btn">Request to extend assignment submission deadline</button>
                </div>
            </div>
            <div class="quieries-list">
                <button class="queries_open_btn" type="button" data-toggle="collapse" data-target="#underconsideration_queries_list" aria-expanded="false" aria-controls="underconsiderationqueries">
                    Underconsideration
                </button>
                <div class="collapse extra_class" id="underconsideration_queries_list">
                    <button class="query_btn">Permission to grant OD for Basketball</button>
                </div>
            </div>
            <div class="quieries-list">
                <button class="queries_open_btn" type="button" data-toggle="collapse" data-target="#closed_queries_list" aria-expanded="false" aria-controls="closedqueries">
                    Closed
                </button>
                <div class="collapse extra_class" id="closed_queries_list">
                    <!-- <button class="query_btn">Permission to grant OD for Basketball</button> -->
                </div>
            </div>
            <div class="quieries-list">
                <button class="queries_open_btn" type="button" data-toggle="collapse" data-target="#rejected_queries_list" aria-expanded="false" aria-controls="underconsiderationqueries">
                    Rejected
                </button>
                <div class="collapse extra_class" id="rejected_queries_list">
                    <button class="query_btn">Grant Exception to not give practicals</button>
                    <button class="query_btn">Grant Permission to organise Holi Function</button>
                </div>
            </div>
        </div>
    </div>
    <div class="cont-second">
        <div class=query-details>
            <h3><span>Request to extend assignment submission deadline</span></h3>
            <div class="details-p">
                <p>Facility - CS Dept.</p>
                <p>Created On</p>
            </div>
            <div class="details-p">
                <p> Faculty : Pankaj Jhadwal</p>
                <p>Created </p>
            </div>
        </div>
        <div class=chat-screen>
            <div class=chats>
                <div class="msg msg-sent"><div><span class=" msg-format ">Hi Sir<br>Can we have an extention for the subission of IOT assignment</span><span class="msg-time">21-07-21 09:30 AM</span></div></div>
                <div class="msg msg-recieved"><div><span class=" msg-format ">Would you please specify the reason??</span><span class="msg-time">21-07-21 09:30 AM</span></div></div>
            </div>
            <div class=sent-box>
                <input type="text" name="msg-content" placeholder="Type your Text" id="msg-content"/>
                <button class=sent-button><i class="far fa-paper-plane"></i></button>
                <!-- <button class=sent-button><i class="fas fa-clock"></i></button> -->
            </div>
        </div>
    </div>
</div>