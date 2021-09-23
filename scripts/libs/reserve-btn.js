class ReserveBtn {
  constructor() {
    this.DOM = {};
    this.DOM.btn01 = document.querySelector('.reserve-btn-js__01');
    this.DOM.btn02 = document.querySelector('.reserve-btn-js__02');
    this.eventType = this._getEventType();
    this._addEvent();
  }

  _getEventType() {
    return window.ontouchstart ? 'touchstart' : 'click';
  }
  _toggle() {
    this.DOM.btn01.classList.toggle('js-reserve');
    this.DOM.btn02.classList.toggle('visible');
  }

  _addEvent() {
    this.DOM.btn01.addEventListener(this.eventType, this._toggle.bind(this));
    this.DOM.btn02.addEventListener(this.eventType, this._toggle.bind(this));
  }
}
new ReserveBtn();

document.addEventListener('DOMContentLoaded', function () {
  btn01 = document.querySelector('.reserve-btn-js__01');
  btn02 = document.querySelector('.reserve-btn-js__02');

  const visible = () => {
    setTimeout(() => {
      btn01.classList.toggle('js-reserve');
    }, 5000);
    setTimeout(() => {
      btn02.classList.toggle('visible');
    }, 5000);
  }
  visible();

  setTimeout(() => {
    const hidden = () => {
      btn01.classList.remove('js-reserve');
      btn02.classList.remove('visible');
    }
    hidden();
  }, 8000);
});