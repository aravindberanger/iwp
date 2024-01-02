// Import the functions you need from the SDKs you need
import firebase from "firebase/compat/app";
import "firebase/compat/auth";
import { initializeApp } from "firebase/app";
import { getAnalytics } from "firebase/analytics";
// TODO: Add SDKs for Firebase products that you want to use
// https://firebase.google.com/docs/web/setup#available-libraries

// Your web app's Firebase configuration
// For Firebase JS SDK v7.20.0 and later, measurementId is optional
const firebaseConfig = firebase.initializeApp({
  apiKey: "AIzaSyCIYu5SUgjueFTrr0koZkgnZAqQoUGaSpM",
  authDomain: "react-auth-9f386.firebaseapp.com",
  projectId: "react-auth-9f386",
  storageBucket: "react-auth-9f386.appspot.com",
  messagingSenderId: "680352451674",
  appId: "1:680352451674:web:a6a44e9eea324b1506dc63",
  measurementId: "G-MXEL8T62BH"
});

export default firebaseConfig;
