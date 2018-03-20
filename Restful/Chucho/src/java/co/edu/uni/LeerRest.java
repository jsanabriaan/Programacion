/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package co.edu.uni;

import org.json.simple.JSONArray;
import org.json.simple.JSONObject;
import org.json.simple.parser.JSONParser;
import org.json.simple.parser.ParseException;

import java.io.FileNotFoundException;
import java.io.FileReader;
import java.io.IOException;
import java.util.Iterator;
/**
 *
 * @author Familia Sanajeda
 */
public class LeerRest {
 
    public static void main(String[] args) {

        JSONParser parser = new JSONParser();

        try {

            Object obj = "http://localhost:8080/CalculoIva/webresources/Iva/calcular/"+1000;/*(new FileReader("f:\\test.json"));*/

            
            System.out.println(obj);
            JSONObject jsonObject = (JSONObject) obj;
            System.out.println(jsonObject);

            String name = (String) jsonObject.get("iva");
            System.out.println(name);

            long age = (Long) jsonObject.get("age");
            System.out.println(age);

            // loop array
            JSONArray msg = (JSONArray) jsonObject.get("messages");
            Iterator<String> iterator = msg.iterator();
            while (iterator.hasNext()) {
                System.out.println(iterator.next());
            }

        }catch (Exception e) {
        } 

    }

}

