class LoginPanel {
    constructor() {   
        this.logPanel = document.querySelector(".login-panel");
        this.logPanelID = document.querySelector("#login-panel");

        this.logToggle = document.querySelector(".log-toggle");
        this.panelExtend = [
            { width: '120px' },
            { width: '420px' }
          ];

        this.PanelShrink = [
            { width: '420px' },
            { width: '120px' }
        ]

        this.panelExtendTiming = {
            duration: 500,
            iterations: 1,
            fill: 'forwards'
          };

        this.logToggle.addEventListener("click", () => this.panelToggle());

        if (this.logPanelID.classList.contains("open")) { console.log('open is conatins')};
        }
         

         panelToggle() {
            this.logPanel.classList.toggle("open");
            this.logPanel.animate(this.panelExtend, this.panelExtendTiming);
        }

};

export default LoginPanel;
