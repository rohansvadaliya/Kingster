
function notificationsDisplay(all,clientSupport,renew,subAgentQuery){

    ///all 
    let notificationsContainerAll = $('#all_notification_data');
    notificationsContainerAll.empty();
    let allNotificationCountElement = $('#all-notification-count');
    let notificationCount = $('#notification-count');
    let bellIcon = $('#page-header-notifications-dropdown i.bx-bell');

    if (all.length === 0) {
        notificationsContainerAll.append('<p style="display: flex; justify-content: center; align-items: center; height: 100px; text-align: center; margin: 0;">No notifications available.</p>');
        allNotificationCountElement.text('');
        notificationCount.text('');
        notificationCount.hide();
        allNotificationCountElement.hide();
        bellIcon.removeClass('bx-tada');
    }else{
        all.forEach(notification => {
            const notificationTime = new Date(notification.created_at);
            const currentTime = new Date();
            const timeDifference = Math.floor((currentTime - notificationTime) / 60000); // Difference in minutes
    
            let timeDisplay;
            if (timeDifference < 1) {
                timeDisplay = 'Just now';
            }else if(timeDifference < 60) {
                timeDisplay = `${timeDifference} min ago`;
            }else if(timeDifference < 1440) {
                const hours = Math.floor(timeDifference / 60);
                timeDisplay = `${hours} hour${hours > 1 ? 's' : ''} ago`;
            }else{
                const days = Math.floor(timeDifference / 1440);
                timeDisplay = `${days} day${days > 1 ? 's' : ''} ago`;
            }
    
                notificationsContainerAll.append(`
                        <a href="javascript: void(0);" class="text-reset notification-item">
                            <div class="d-flex">
                            <img src="${notification.client_photo}" alt="" class="me-3 rounded-circle avatar-xs">
                                <div class="flex-grow-1">   
                               
                                    <h6 class="mb-1" key="t-your-order">${notification.full_name}</h6>
                                    <h7 class="mb-1" key="t-your-order">${notification.title}</h7>
                                    <div class="font-size-12 text-muted">
                                    <p class="mb-1" key="t-grammer">${notification.description}</p>
                                    <div style="display: flex; justify-content: space-between;">
                                    <span class="mb-0"><i class="mdi mdi-clock-outline"></i> <span key="t-min-ago">${timeDisplay} </span></span>
                                    <button class="btn btn-sm btn-light mark-as-read" onclick="markAsRead(${notification.id})">Mark as Read</button>
                                    </div>
                                </div>
                            </div>
                            </div>
                        </a>
                    `);
        });
        allNotificationCountElement.text(all.length);
        notificationCount.text(all.length);
        notificationCount.show();
        allNotificationCountElement.show();
        bellIcon.addClass('bx-tada');
      }
    

    ///client support
    let notificationsContainerClientSupport = $('#clientSupport'); 
    notificationsContainerClientSupport.empty();
    let clientSupportNotificationCountElement = $('#client-support-notification-count');
    if (clientSupport.length === 0) {
        clientSupportNotificationCountElement.text('');
        clientSupportNotificationCountElement.hide();
        notificationsContainerClientSupport.append('<p style="display: flex; justify-content: center; align-items: center; height: 100px; text-align: center; margin: 0;">No notifications available.</p>');
    }else{
        clientSupport.forEach(notification => {
            const notificationTime = new Date(notification.created_at);
            const currentTime = new Date();
            const timeDifference = Math.floor((currentTime - notificationTime) / 60000); // Difference in minutes

            let timeDisplay;
            if (timeDifference < 1) {
                timeDisplay = 'Just now';
            }else if(timeDifference < 60) {
                timeDisplay = `${timeDifference} min ago`;
            }else if(timeDifference < 1440) {
                const hours = Math.floor(timeDifference / 60);
                timeDisplay = `${hours} hour${hours > 1 ? 's' : ''} ago`;
            }else{
                const days = Math.floor(timeDifference / 1440);
                timeDisplay = `${days} day${days > 1 ? 's' : ''} ago`;
            }

            notificationsContainerClientSupport.append(`
                        <a href="javascript: void(0);" class="text-reset notification-item">
                            <div class="d-flex">

                            <img src="${notification.client_photo}" alt="" class="me-3 rounded-circle avatar-xs">
                                <div class="flex-grow-1">   
                                    <h6 class="mb-1" key="t-your-order">${notification.full_name}</h6>
                                    <h7 class="mb-1" key="t-your-order">${notification.title}</h7>
                                    <div class="font-size-12 text-muted">
                                    <p class="mb-1" key="t-grammer">${notification.description}</p>
                                    <div style="display: flex; justify-content: space-between;">
                                    <span class="mb-0"><i class="mdi mdi-clock-outline"></i> <span key="t-min-ago">${timeDisplay} </span></span>
                                    <button class="btn btn-sm btn-light mark-as-read" onclick="markAsRead(${notification.id})">Mark as Read</button>
                                    </div>
                                </div>
                            </div>
                            </div>
                        </a>
                    `);
        });
        clientSupportNotificationCountElement.text(clientSupport.length);
        clientSupportNotificationCountElement.show();
     
    } 
        
    //// renew
    let notificationsContainerRenew = $('#renewPolicy'); 
    let renewNotificationCountElement = $('#renew-notification-count');
    notificationsContainerRenew.empty(); 
    if (renew.length === 0) {
        renewNotificationCountElement.hide();
        renewNotificationCountElement.text('');
        notificationsContainerRenew.append('<p style="display: flex; justify-content: center; align-items: center; height: 100px; text-align: center; margin: 0;">No notifications available.</p>');
    }else{
            renew.forEach(notification => {
            const notificationTime = new Date(notification.created_at);
            const currentTime = new Date();
            const timeDifference = Math.floor((currentTime - notificationTime) / 60000); // Difference in minutes
    
            let timeDisplay;
            if (timeDifference < 1) {
                timeDisplay = 'Just now';
            }else if(timeDifference < 60) {
                timeDisplay = `${timeDifference} min ago`;
            }else if(timeDifference < 1440) {
                const hours = Math.floor(timeDifference / 60);
                timeDisplay = `${hours} hour${hours > 1 ? 's' : ''} ago`;
            }else{
                const days = Math.floor(timeDifference / 1440);
                timeDisplay = `${days} day${days > 1 ? 's' : ''} ago`;
            }
    
            notificationsContainerRenew.append(`
                        <a href="javascript: void(0);" class="text-reset notification-item">
                            <div class="d-flex">
                            <img src="${notification.client_photo}" alt="" class="me-3 rounded-circle avatar-xs">
                                <div class="flex-grow-1">   
                                    <h6 class="mb-1" key="t-your-order">${notification.full_name}</h6>
                                    <h7 class="mb-1" key="t-your-order">${notification.title}</h7>
                                    <div class="font-size-12 text-muted">
                                    <p class="mb-1" key="t-grammer">${notification.description}</p>
                                    <div style="display: flex; justify-content: space-between;">
                                    <span class="mb-0"><i class="mdi mdi-clock-outline"></i> <span key="t-min-ago">${timeDisplay} </span></span>
                                    <button class="btn btn-sm btn-light mark-as-read" onclick="markAsRead(${notification.id})">Mark as Read</button>
                                    </div>
                                </div>
                            </div>
                            </div>
                        </a>
                    `);
            });
            renewNotificationCountElement.text(renew.length);
            renewNotificationCountElement.show();
        
    }   
    ////renew

    //subAgent
    let notificationsContainerSubAgent = $('#subAgent'); 
    let subAgentNotificationCountElement = $('#sub-agent-notification-count');

    
    notificationsContainerSubAgent.empty();
    if (subAgentQuery.length === 0) {
        subAgentNotificationCountElement.text('');
        subAgentNotificationCountElement.hide();
        notificationsContainerSubAgent.append('<p style="display: flex; justify-content: center; align-items: center; height: 100px; text-align: center; margin: 0;">No notifications available.</p>');
    }else{
        subAgentQuery.forEach(notification => {
            const notificationTime = new Date(notification.created_at);
            const currentTime = new Date();
            const timeDifference = Math.floor((currentTime - notificationTime) / 60000); // Difference in minutes
    
            let timeDisplay;
            if (timeDifference < 1) {
                timeDisplay = 'Just now';
            }else if(timeDifference < 60) {
                timeDisplay = `${timeDifference} min ago`;
            }else if(timeDifference < 1440) {
                const hours = Math.floor(timeDifference / 60);
                timeDisplay = `${hours} hour${hours > 1 ? 's' : ''} ago`;
            }else{
                const days = Math.floor(timeDifference / 1440);
                timeDisplay = `${days} day${days > 1 ? 's' : ''} ago`;
            }
    
            notificationsContainerSubAgent.append(`
                        <a href="javascript: void(0);" class="text-reset notification-item">
                            <div class="d-flex">
                            <img src="${notification.client_photo}" alt="" class="me-3 rounded-circle avatar-xs">
                                <div class="flex-grow-1">   
                                    <h6 class="mb-1" key="t-your-order">${notification.full_name}</h6>
                                    <h7 class="mb-1" key="t-your-order">${notification.title}</h7>
                                    <div class="font-size-12 text-muted">
                                    <p class="mb-1" key="t-grammer">${notification.description}</p>
                                    <div style="display: flex; justify-content: space-between;">
                                    <span class="mb-0"><i class="mdi mdi-clock-outline"></i> <span key="t-min-ago">${timeDisplay} </span></span>
                                    <button class="btn btn-sm btn-light mark-as-read" onclick="markAsRead(${notification.id})">Mark as Read</button>
                                    </div>
                                </div>
                            </div>
                            </div>
                        </a>
                    `);
        });
        
        subAgentNotificationCountElement.text(subAgentQuery.length);
        subAgentNotificationCountElement.show();
    }
    //subAgent
}


function markAsRead(notifcation_id) {
    $.ajax({
        url: markAsReadNotification + '?id=' + notifcation_id,
        type: 'GET',
        success: function(response) {
            toastr["success"]("Notification marked as read");
            notificationsDisplay(response.data.allNotifications,response.data.clientSupportNotifications,response.data.renewNotifications,response.data.subAgentNotifications);
            $('#datatable-client-support').DataTable().ajax.reload(null, false);
            $("#datatable-sub-agent").DataTable().ajax.reload(null, false);
            $('#datatable-renew').DataTable().ajax.reload(null, false);
            $("#datatable-all").DataTable().ajax.reload(null, false);
        },
        error: function(jqXHR, textStatus, errorThrown) {
            console.log(textStatus, errorThrown);
        }
    });
}

function saveNotificationToRenewPolicyToday() {
    var csrfToken = $('meta[name="csrf-token"]').attr('content');
    // show client support notification
     $.ajax({
         url: saveNotificationToRenewToday,
         type: 'POST',
         headers: {
            'X-CSRF-TOKEN': csrfToken
        },
         success: function(response) {
           
         },
         error: function(jqXHR, textStatus, errorThrown) {
             console.log(textStatus, errorThrown);
         }
     });
 }
