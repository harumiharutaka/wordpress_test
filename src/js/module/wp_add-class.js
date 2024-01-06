/*********************************
    WP用 クラスを与える
*********************************/

export function wpAddClass() {

    // グローバルメニューにドロップダウンクラスを与える
    const dropdown = document.querySelector('.dropdown');

    const dropdownItems = dropdown.querySelectorAll(':scope>li');
    dropdownItems.forEach(function(dropdownItem, index) {

        dropdownItem.classList.add('dropdown__item');
        
    });

    const dropdownLinks = dropdown.querySelectorAll('.dropdown__item');
    dropdownLinks.forEach(function(dropdownLink, index) {

        const childrenAs = dropdownLink.querySelectorAll(':scope>a');
        childrenAs.forEach(function(childrenA, index) {

            childrenA.classList.add('dropdown__link');

            if(!childrenA.hasAttribute("href")) {

                childrenA.setAttribute("tabindex","0");
                childrenA.insertAdjacentHTML('beforeend', '<i class="dropdown__link-icon fa-solid fa-angle-down"></i>');
                childrenA.classList.add('js_dropdown_link_parent');

            }
            
        });

        const childrenUls = dropdownLink.querySelectorAll(':scope>ul');
        childrenUls.forEach(function(childrenUl, index) {

            childrenUl.classList.add('dropdown__child');
            
        });
        
    });

    const dropdownChildItems = dropdown.querySelectorAll('.dropdown__child');
    dropdownChildItems.forEach(function(dropdownChildItem, index) {

        const childrenLis = dropdownChildItem.querySelectorAll(':scope>li');
        childrenLis.forEach(function(childrenLi, index) {

            childrenLi.classList.add('dropdown__child-item');
            
        });
        
    });

    const dropdownChildLinks = dropdown.querySelectorAll('.dropdown__child-item');
    dropdownChildLinks.forEach(function(dropdownChildLink, index) {

        const childrenAs = dropdownChildLink.querySelectorAll(':scope>a');
        childrenAs.forEach(function(childrenA, index) {

            childrenA.classList.add('dropdown__child-link');

            if(!childrenA.hasAttribute("href")) {

                childrenA.setAttribute("tabindex","0");
                childrenA.insertAdjacentHTML('beforeend', '<i class="dropdown__child-icon fa-solid fa-angle-right"></i>');
                childrenA.classList.add('js_dropdown_child_parent');

            }
            
        });

        const childrenUls = dropdownChildLink.querySelectorAll(':scope>ul');
        childrenUls.forEach(function(childrenUl, index) {

            childrenUl.classList.add('dropdown__grandchild');
            
        });
        
    });

    const dropdownGrandchildItems = dropdown.querySelectorAll('.dropdown__grandchild');
    dropdownGrandchildItems.forEach(function(dropdownGrandchildItem, index) {

        const childrenLis = dropdownGrandchildItem.querySelectorAll(':scope>li');
        childrenLis.forEach(function(childrenLi, index) {

            childrenLi.classList.add('dropdown__grandchild-item');
            
        });
        
    });

    const dropdownGrandchildLinks = dropdown.querySelectorAll('.dropdown__grandchild-item');
    dropdownGrandchildLinks.forEach(function(dropdownGrandchildLink, index) {

        const childrenAs = dropdownGrandchildLink.querySelectorAll(':scope>a');
        childrenAs.forEach(function(childrenA, index) {

            childrenA.classList.add('dropdown__grandchild-link');
            
        });
        
    });

    // グローバルメニューにドロワークラスを与える
    const drawer = document.querySelector('.drawer');

    const drawerItems = drawer.querySelectorAll(':scope>li');
    drawerItems.forEach(function(drawerItem, index) {

        drawerItem.classList.add('drawer__item');
        
    });

    const drawerLinks = drawer.querySelectorAll('.drawer__item');
    drawerLinks.forEach(function(drawerLink, index) {

        const childrenAs = drawerLink.querySelectorAll(':scope>a');
        childrenAs.forEach(function(childrenA, index) {

            childrenA.classList.add('drawer__link');

            if(!childrenA.hasAttribute("href")) {

                childrenA.setAttribute("tabindex","0");
                childrenA.insertAdjacentHTML('beforeend', '<i class="drawer__icon fa-solid fa-angle-right"></i>');
                childrenA.classList.add('js_drawer_link_parent');

            }
            
        });

        const childrenUls = drawerLink.querySelectorAll(':scope>ul');
        childrenUls.forEach(function(childrenUl, index) {

            childrenUl.classList.add('drawer__child');
            childrenUl.insertAdjacentHTML('afterbegin', '<a tabindex="0" class="drawer__child-link js_drawer_child_close" aria-label="子メニューを閉じる"><i class="drawer__icon fa-solid fa-angle-left"></i></a>');
            
        });
        
    });

    const drawerChildItems = drawer.querySelectorAll('.drawer__child');
    drawerChildItems.forEach(function(drawerChildItem, index) {

        const childrenLis = drawerChildItem.querySelectorAll(':scope>li');
        childrenLis.forEach(function(childrenLi, index) {

            childrenLi.classList.add('drawer__child-item');
            
        });
        
    });

    const drawerChildLinks = drawer.querySelectorAll('.drawer__child-item');
    drawerChildLinks.forEach(function(drawerChildLink, index) {

        const childrenAs = drawerChildLink.querySelectorAll(':scope>a');
        childrenAs.forEach(function(childrenA, index) {

            childrenA.classList.add('drawer__child-link');

            if(!childrenA.hasAttribute("href")) {

                childrenA.setAttribute("tabindex","0");
                childrenA.insertAdjacentHTML('beforeend', '<i class="drawer__icon fa-solid fa-angle-right"></i>');
                childrenA.classList.add('js_drawer_child_parent');

            }
            
        });

        const childrenUls = drawerChildLink.querySelectorAll(':scope>ul');
        childrenUls.forEach(function(childrenUl, index) {

            childrenUl.classList.add('drawer__grandchild');
            childrenUl.insertAdjacentHTML('afterbegin', '<a tabindex="0" class="drawer__child-link js_drawer_grandchild_close" aria-label="孫メニューを閉じる"><i class="drawer__icon fa-solid fa-angle-left"></i></a>');
            
        });
        
    });

    const drawerGrandchildItems = drawer.querySelectorAll('.drawer__grandchild');
    drawerGrandchildItems.forEach(function(drawerGrandchildItem, index) {

        const childrenLis = drawerGrandchildItem.querySelectorAll(':scope>li');
        childrenLis.forEach(function(childrenLi, index) {

            childrenLi.classList.add('drawer__grandchild-item');
            
        });
        
    });

    const drawerGrandchildLinks = drawer.querySelectorAll('.drawer__grandchild-item');
    drawerGrandchildLinks.forEach(function(drawerGrandchildLink, index) {

        const childrenAs = drawerGrandchildLink.querySelectorAll(':scope>a');
        childrenAs.forEach(function(childrenA, index) {

            childrenA.classList.add('drawer__grandchild-link');
            
        });
        
    });
    
    // フォームにクラスを与える

    const formRadio = document.querySelector('.wp_form-radio');
    if (formRadio) {

        const formRadioIcons = formRadio.querySelectorAll('.wpcf7-list-item-label');
        formRadioIcons.forEach(function(formRadioIcon, index) {

            formRadioIcon.insertAdjacentHTML('beforebegin', '<span class="form-radio__icon"></span>');
        });
    
    }
    
    const formCheckbox = document.querySelector('.wp_form-checkbox');
    if (formCheckbox) {

        const formCheckboxIcons = formCheckbox.querySelectorAll('.wpcf7-list-item-label');
        formCheckboxIcons.forEach(function(formCheckboxIcon, index) {

            formCheckboxIcon.insertAdjacentHTML('beforebegin', '<span class="form-checkbox__icon"></span>');
        });
    }
    
}