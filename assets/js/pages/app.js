import { MainHeader } from "../../components/main-header.js";
import { MainFooter } from "../../components/main-footer.js";

const wrapper = document.querySelector("body .wrapper");
wrapper.innerHTML = new MainHeader().init() + wrapper.innerHTML;
wrapper.innerHTML += new MainFooter().init();
