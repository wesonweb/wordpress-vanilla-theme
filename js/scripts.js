// tabs
function setupTabs() {
    document.querySelectorAll('.tabs__button').forEach(button => {
        button.addEventListener('click', () => {
        // sidebar
        const sidebar = button.parentElement;
        // tabs container 
        const tabsContainer = sidebar.parentElement;
        // get buttons data - for-tab
        const tabNumber = button.dataset.forTab;
        // activate tab panel content
        const tabToActivate = tabsContainer.querySelector(`.tabs__content[data-tab="${tabNumber}"]`);

        // console.log(sidebar);
        // console.log(tabsContainer);
        // console.log(tabNumber);
        // console.log(tabToActivate);

        sidebar.querySelectorAll('.tabs__button').forEach(button => {
            button.classList.remove('tabs__button--active');
            button.setAttribute('aria-selected', false);

        })

        tabsContainer.querySelectorAll('.tabs__content').forEach(tab => {
            tab.classList.remove('tabs__content--active');
            tab.setAttribute('aria-hidden', true);
        })

        button.classList.add('tabs__button--active');
        tabToActivate.classList.add('tabs__content--active');
        button.setAttribute('aria-selected', true);
        tabToActivate.setAttribute('aria-hidden', false);
        tabToActivate.focus();
        });
    });
}

document.addEventListener('DOMContentLoaded', () => {
    setupTabs();
    document.querySelectorAll('.tabs').forEach(tabsContainer => {
        tabsContainer.querySelector('.tabs__sidebar .tabs__button').click();
    });
});