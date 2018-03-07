
package co.edu.uniminuto;

import javax.xml.bind.JAXBElement;
import javax.xml.bind.annotation.XmlElementDecl;
import javax.xml.bind.annotation.XmlRegistry;
import javax.xml.namespace.QName;


/**
 * This object contains factory methods for each 
 * Java content interface and Java element interface 
 * generated in the co.edu.uniminuto package. 
 * <p>An ObjectFactory allows you to programatically 
 * construct new instances of the Java representation 
 * for XML content. The Java representation of XML 
 * content can consist of schema derived interfaces 
 * and classes representing the binding of schema 
 * type definitions, element declarations and model 
 * groups.  Factory methods for each of these are 
 * provided in this class.
 * 
 */
@XmlRegistry
public class ObjectFactory {

    private final static QName _Calcular_QNAME = new QName("http://uniminuto.edu.co/", "calcular");
    private final static QName _CalcularResponse_QNAME = new QName("http://uniminuto.edu.co/", "calcularResponse");

    /**
     * Create a new ObjectFactory that can be used to create new instances of schema derived classes for package: co.edu.uniminuto
     * 
     */
    public ObjectFactory() {
    }

    /**
     * Create an instance of {@link Calcular_Type }
     * 
     */
    public Calcular_Type createCalcular_Type() {
        return new Calcular_Type();
    }

    /**
     * Create an instance of {@link CalcularResponse }
     * 
     */
    public CalcularResponse createCalcularResponse() {
        return new CalcularResponse();
    }

    /**
     * Create an instance of {@link JAXBElement }{@code <}{@link Calcular_Type }{@code >}}
     * 
     */
    @XmlElementDecl(namespace = "http://uniminuto.edu.co/", name = "calcular")
    public JAXBElement<Calcular_Type> createCalcular(Calcular_Type value) {
        return new JAXBElement<Calcular_Type>(_Calcular_QNAME, Calcular_Type.class, null, value);
    }

    /**
     * Create an instance of {@link JAXBElement }{@code <}{@link CalcularResponse }{@code >}}
     * 
     */
    @XmlElementDecl(namespace = "http://uniminuto.edu.co/", name = "calcularResponse")
    public JAXBElement<CalcularResponse> createCalcularResponse(CalcularResponse value) {
        return new JAXBElement<CalcularResponse>(_CalcularResponse_QNAME, CalcularResponse.class, null, value);
    }

}
