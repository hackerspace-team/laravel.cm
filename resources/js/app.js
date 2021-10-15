import Alpine from 'alpinejs';
import hljs from 'highlight.js';
import Choices from 'choices.js';

// Alpine plugins.
import internationalNumber from "./plugins/internationalNumber";

require('./bootstrap');
require('./editor');
require('./scrollspy');

// Add Alpine to window object.
window.Alpine = Alpine;

// Create a multiselect element.
window.choices = (element) => {
  return new Choices(element, { maxItemCount: 3, removeItemButton: true });
};

// Syntax highlight code blocks.
window.highlightCode = (element) => {
  element.querySelectorAll('pre code').forEach((block) => {
    hljs.highlightBlock(block);
  });
};

Alpine.data('internationalNumber', internationalNumber)

Alpine.start();
