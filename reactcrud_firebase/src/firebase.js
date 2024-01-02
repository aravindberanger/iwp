import { initializeApp } from "firebase/app";
import { getFirestore } from "firebase/firestore";

const firebaseConfig = {
  apiKey: "AIzaSyAvbZpaTapkA4IBva-5XVOUGZHITxMxkuw",
  authDomain: "reactcrud-3807d.firebaseapp.com",
  databaseURL: "https://reactcrud-3807d-default-rtdb.firebaseio.com",
  projectId: "reactcrud-3807d",
  storageBucket: "reactcrud-3807d.appspot.com",
  messagingSenderId: "894656890411",
  appId: "1:894656890411:web:2ea491e9ae8544e2ee4c6e",
  measurementId: "G-25DJS97ZSB"
};

const app = initializeApp(firebaseConfig);
const db = getFirestore(app);

export { db };
